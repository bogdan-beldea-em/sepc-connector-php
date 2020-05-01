<?php


namespace OM\OddsMatrix\SEPC\Connector;


use JMS\Serializer\Exception\XmlErrorException;
use JMS\Serializer\SerializerInterface;
use OM\OddsMatrix\SEPC\Connector\Exception\ConnectionException;
use OM\OddsMatrix\SEPC\Connector\Exception\SocketException;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse;
use OM\OddsMatrix\SEPC\Connector\Util\LogUtil;
use OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider;
use Psr\Log\LoggerInterface;

class SEPCPushBridge
{
    private const READ_RETRIES = 20;
    private const WAIT_SECONDS_BEFORE_RETRY = 5;

    /**
     * @var int
     */
    private $_messageCounter = 0;

    /**
     * @var resource
     */
    private $_socket;

    /**
     * @var SerializerInterface
     */
    private $_serializer;

    /**
     * @var LoggerInterface
     */
    private $_logger;

    /**
     * @var int
     */
    private $_socketReadRetries = self::READ_RETRIES;

    /**
     * @var float
     */
    private $_lastByteReceivedTimestamp = 0;

    /**
     * SEPCPushBridge constructor.
     * @param $_socket
     * @param LoggerInterface|null $logger
     */
    public function __construct($_socket, LoggerInterface $logger = null)
    {
        $this->_logger = $logger;
        $this->_socket = $_socket;
        $this->_lastByteReceivedTimestamp = microtime(true);

        try {
            $this->_serializer = SDQLSerializerProvider::getSerializer();
        } catch (\ReflectionException $e) {
            LogUtil::logC($this->_logger, "Could not instantiate XML serializer: $e");
        }
    }

    /**
     * @param SDQLRequest $object
     * @throws SocketException
     */
    public function sendData(SDQLRequest $object): void
    {
        $dataToSend = $this->_serializer->serialize($object, 'xml');
        $dataToSend = preg_replace("/[\n]|[\r]/", "", $dataToSend);
        LogUtil::logI($this->_logger, "Prepare to send data: $dataToSend");

        $compressedDataToSend = gzencode($dataToSend);
        $compressedDataLength = strlen($compressedDataToSend);
        $package = "$compressedDataLength\0$compressedDataToSend";
        $remainingDataToSend = strlen($package);


        while ($remainingDataToSend > 0) {
            $sentBytes = socket_write($this->_socket, $package);
            if (false == $sentBytes) {
                $lastErrorCode = socket_last_error($this->_socket);
                $lastErrorMessage = socket_strerror($lastErrorCode);
                LogUtil::logW($this->_logger, "Socket error! Code: $lastErrorCode Message: $lastErrorMessage");

                throw new SocketException($lastErrorMessage, $lastErrorCode);
            }

            LogUtil::logI($this->_logger, "Sent $sentBytes chunk");
            $remainingDataToSend -= $sentBytes;
            $package = substr($package, $sentBytes);
        }
    }

    /**
     * @return SDQLResponse|null
     * @throws ConnectionException
     * @throws SocketException
     */
    public function receiveData(): ?SDQLResponse
    {
        LogUtil::logI($this->_logger, "Waiting for data");
        $rawData = $this->socketRead($this->_socket, 1);
        $this->assertSocketData($rawData);

        if (strlen($rawData) <= 0) {
            return null;
        }

        while (!preg_match("/[0-9]/", $rawData)) {
            $rawData = $this->socketRead($this->_socket, 1);
            $this->assertSocketData($rawData);
        }

        $contentLengthString = '';
        while (preg_match("/[0-9]/", $rawData)) {
            LogUtil::logI($this->_logger, "Received content_length info: $rawData");
            $contentLengthString .= $rawData;
            $rawData = $this->socketRead($this->_socket, 1);
            $this->assertSocketData($rawData);
        }
        $contentLength = (int)$contentLengthString;
        LogUtil::logI($this->_logger, "Actual content length: $contentLength");

        $content = '';
        while (strlen($content) < $contentLength) {
            $socket_read = $this->socketRead($this->_socket, $contentLength - strlen($content));
            $this->assertSocketData($socket_read);

            if (0 === $socket_read || strlen($socket_read) < 1) {
                $this->_socketReadRetries--;

                if (0 >= $this->_socketReadRetries) {
                    throw new ConnectionException();
                }

                sleep(self::WAIT_SECONDS_BEFORE_RETRY);
                LogUtil::logW($this->_logger, "Read 0 bytes from socket, retry attempt {$this->_socketReadRetries}, waiting " .
                    self::WAIT_SECONDS_BEFORE_RETRY . " seconds");

                continue;
            }

            $this->_socketReadRetries = self::READ_RETRIES;

            $content .= $socket_read;
            $receivedDataLength = strlen($socket_read);
            LogUtil::logI($this->_logger, "Received chunk of size " . $receivedDataLength);
        }

        $response = gzdecode($content);
        $this->_messageCounter++;
        $decodedSocketInputDirectoryPath = getenv("DECODED_SOCKET_DIRECTORY_PATH");
        if (strlen($decodedSocketInputDirectoryPath) > 0) {
            $filename = $decodedSocketInputDirectoryPath . "{$this->_messageCounter}.xml";
            file_put_contents($filename, $response);
        }

        try {
            return $this->_serializer->deserialize($response, SDQLResponse::class, 'xml');
        } catch (XmlErrorException $e) {
            LogUtil::logW($this->_logger, "Failed to parse XML data: $response");
            return null;
        }
    }

    /**
     * @param $rawData
     * @throws SocketException
     */
    private function assertSocketData($rawData): void
    {
        if (false === $rawData) {
            $errorCode = socket_last_error($this->_socket);
            $errorMessage = socket_strerror($errorCode);

            $socketException = new SocketException($errorMessage, $errorCode);
            $this->_logger->error("[SEPCPushBridge] $socketException");

            throw $socketException;
        }
    }

    /**
     * @param resource $socket
     * @param int $length
     * @return false|string
     */
    private function socketRead($socket, int $length) {
        $data = socket_read($socket, $length);

        if (false !== $data) {
            $rawSocketFilePath = getenv("RAW_SOCKET_OUTPUT_FILE");
            if (strlen($rawSocketFilePath) > 0) {
                $handle = fopen($rawSocketFilePath, "a");
                fwrite($handle, $data);
                fflush($handle);

                fseek($handle, 0, SEEK_END);
                $position = ftell($handle);
                $this->_logger->info("RAW_SOCKET_OUTPUT_FILE seek position: $position");

                fclose($handle);
            }
        }

        return $data;
    }
}