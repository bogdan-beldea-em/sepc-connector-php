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

    private $_socketReadRetries = self::READ_RETRIES;

    /**
     * SEPCPushBridge constructor.
     * @param $_socket
     * @param LoggerInterface|null $logger
     */
    public function __construct($_socket, LoggerInterface $logger = null)
    {
        $this->_logger = $logger;
        $this->_socket = $_socket;

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
        LogUtil::logD($this->_logger, "Prepare to send data: $dataToSend");

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

            LogUtil::logD($this->_logger, "Sent $sentBytes chunk");
            $remainingDataToSend -= $sentBytes;
            $package = substr($package, $sentBytes);
        }
    }

    /**
     * @return SDQLResponse|null
     * @throws ConnectionException
     */
    public function receiveData(): ?SDQLResponse
    {
        LogUtil::logD($this->_logger, "Waiting for data");
        $rawData = socket_read($this->_socket, "1");

        if (strlen($rawData) <= 0) {
            return null;
        }

        while (!preg_match("/[0-9]/", $rawData)) {
            $rawData = socket_read($this->_socket, "1");
        }

        $contentLengthString = '';
        while (preg_match("/[0-9]/", $rawData)) {
            LogUtil::logD($this->_logger, "Received content_length info: $rawData");
            $contentLengthString .= $rawData;
            $rawData = socket_read($this->_socket, "1");
        }
        $contentLength = (int)$contentLengthString;
        LogUtil::logD($this->_logger, "Actual content length: $contentLength");

        $content = '';
        while (strlen($content) < $contentLength) {
            $socket_read = socket_read($this->_socket, $contentLength);
            if (false === $socket_read) {
                throw new ConnectionException();
            }

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
            LogUtil::logD($this->_logger, "Received chunk of size " . strlen($socket_read));
        }

        $response = gzdecode($content);

        try {
            return $this->_serializer->deserialize($response, SDQLResponse::class, 'xml');
        } catch (XmlErrorException $e) {
            LogUtil::logW($this->_logger, "Failed to parse XML data: $response");
            return null;
        }
    }
}