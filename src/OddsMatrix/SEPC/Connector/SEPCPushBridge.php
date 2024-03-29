<?php


namespace OM\OddsMatrix\SEPC\Connector;


use JMS\Serializer\Exception\XmlErrorException;
use OM\OddsMatrix\SEPC\Connector\Enum\EnvVars;
use OM\OddsMatrix\SEPC\Connector\Exception\ConnectionException;
use OM\OddsMatrix\SEPC\Connector\Exception\SocketException;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse;
use OM\OddsMatrix\SEPC\Connector\Util\LogUtil;
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
     * @var array|false|string
     */
    private $_decodedSocketInputDirectoryPath;

    /**
     * @var bool
     */
    private $_profilingLogsEnabled;

    /**
     * @var bool
     */
    private $_pushBridgeVerboseLogsEnabled;

    /**
     * @var array|false|string
     */
    private $_rawSocketFilePath;

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
        $this->_decodedSocketInputDirectoryPath = getenv(EnvVars::DECODED_SOCKET_DIRECTORY_PATH);
        $this->_profilingLogsEnabled = strlen(getenv(EnvVars::CONNECTOR_PROFILING_LOGS)) > 0;
        $this->_pushBridgeVerboseLogsEnabled = strlen(getenv(EnvVars::PUSH_BRIDGE_VERBOSE_LOGS_ENABLED)) > 0;
        $this->_rawSocketFilePath = getenv(EnvVars::RAW_SOCKET_OUTPUT_FILE);
    }

    /**
     * @param SDQLRequest $object
     * @throws SocketException
     */
    public function sendData(SDQLRequest $object): void
    {
        $dataToSend = json_encode($object->toArray());
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
        $receiveDataMicrotimeBeginTimestamp = 0;
        if ($this->_profilingLogsEnabled) {
            $receiveDataMicrotimeBeginTimestamp = microtime(true);
        }

        LogUtil::logD($this->_logger, "Waiting for data...");
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
            if ($this->_pushBridgeVerboseLogsEnabled) LogUtil::logD($this->_logger, "Received content_length info: $rawData");
            $contentLengthString .= $rawData;
            $rawData = $this->socketRead($this->_socket, 1);
            $this->assertSocketData($rawData);
        }
        $contentLength = (int)$contentLengthString;
        LogUtil::logD($this->_logger, "Content length of serialized batch to be received: $contentLength");

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
            if ($this->_pushBridgeVerboseLogsEnabled) LogUtil::logD($this->_logger, "Received chunk of size " . $receivedDataLength);
        }

        if ($this->_profilingLogsEnabled) {
            $recvTime = microtime(true) - $receiveDataMicrotimeBeginTimestamp;
            LogUtil::logI($this->_logger, "Receive data time: $recvTime");
        }

        $gzdecodeMicrotimeBeginTimestamp = 0;
        if ($this->_profilingLogsEnabled) {
            $gzdecodeMicrotimeBeginTimestamp = microtime(true);
        }

        $response = gzdecode($content);

        if ($this->_profilingLogsEnabled) {
            $gzdecodeTime = microtime(true) - $gzdecodeMicrotimeBeginTimestamp;
            LogUtil::logI($this->_logger, "GZDecode time: $gzdecodeTime");
        }

        $this->_messageCounter++;

        if (strlen($this->_decodedSocketInputDirectoryPath) > 0) {
            $filename = $this->_decodedSocketInputDirectoryPath . "{$this->_messageCounter}.xml";
            file_put_contents($filename, $response);
        }

        try {
            $deserializeMicrotimeBeginTimestamp = 0;
            if ($this->_profilingLogsEnabled) {
                $deserializeMicrotimeBeginTimestamp = microtime(true);
            }

            $deserialize = null;
            try {
                $deserialize = SDQLResponse::wrap(json_decode($response, true, 512, JSON_THROW_ON_ERROR));
            } catch (\Exception $e) {
                LogUtil::logE($this->_logger, "[SEPCPushBridge] Deserialization error for \n $response \n " . $e);
            }

            if ($this->_profilingLogsEnabled) {
                $deserializeTime = microtime(true) - $deserializeMicrotimeBeginTimestamp;
                LogUtil::logI($this->_logger, "Deserialize time: $deserializeTime");
            }

            return $deserialize;
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
            LogUtil::logE($this->_logger, "[SEPCPushBridge] $socketException");

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

            if (strlen($this->_rawSocketFilePath) > 0) {
                $handle = fopen($this->_rawSocketFilePath, "a");
                fwrite($handle, $data);
                fflush($handle);

                fseek($handle, 0, SEEK_END);
                $position = ftell($handle);
                LogUtil::logI($this->_logger, "RAW_SOCKET_OUTPUT_FILE seek position: $position");

                fclose($handle);
            }
        }

        return $data;
    }
}