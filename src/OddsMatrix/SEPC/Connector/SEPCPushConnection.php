<?php


namespace OM\OddsMatrix\SEPC\Connector;


use OM\OddsMatrix\SEPC\Connector\Exception\ConnectionException;
use OM\OddsMatrix\SEPC\Connector\Exception\SEPCException;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLGetNextInitialDataRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLGetNextUpdateDataRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLSubscribeRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLUnsubscribeRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLUpdateDataResumeRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse;
use OM\OddsMatrix\SEPC\Connector\SportsModel\UpdateData;
use OM\OddsMatrix\SEPC\Connector\Util\LogUtil;
use OM\OddsMatrix\SEPC\Connector\Util\SEPCAnnotationLoader;
use Psr\Log\LoggerInterface;

class SEPCPushConnection
{
    /**
     * @var resource
     */
    private $_socket;

    /**
     * @var SEPCConnectionStateInterface
     */
    private $_connectionState;

    /**
     * @var SEPCPushBridge
     */
    private $_bridge;

    /**
     * @var LoggerInterface
     */
    private $_logger;

    /**
     * SEPCPushConnection constructor.
     * @param SEPCCredentials $credentials
     * @param SEPCConnectionStateInterface|null $connectionState
     * @param LoggerInterface|null $logger
     */
    public function __construct(SEPCCredentials $credentials, SEPCConnectionStateInterface $connectionState = null, LoggerInterface $logger = null)
    {
        SEPCAnnotationLoader::load();
        $this->_logger = $logger;

        if (!is_null($connectionState)) {
            $this->_connectionState = $connectionState;
        } else {
            $this->_connectionState = new SEPCBasicConnectionState();
        }

        $this->_connectionState->setSubscriptionSpecificationName(
            $credentials->getSubscriptionSpecificationName()
        );
    }

    /**
     * @param string $host
     * @param int $port
     * @throws ConnectionException
     */
    protected function createSocketConnection(string $host, int $port): void
    {
        $this->_socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

        if (false === $this->_socket) {
            $errorCode = socket_last_error();
            $errorMessage = socket_strerror($errorCode);

            LogUtil::logW($this->_logger, "Failed to connect to host, error code: $errorCode message: $errorMessage");

            throw new ConnectionException($errorMessage, $errorCode);
        }

        $connectSuccessful = socket_connect($this->_socket, $host, $port);
        if (!$connectSuccessful) {
            $errorCode = socket_last_error();
            $errorMessage = socket_strerror($errorCode);

            LogUtil::logW($this->_logger, "Failed to connect to host, error code: $errorCode message: $errorMessage");

            throw new ConnectionException($errorMessage, $errorCode);
        }

        LogUtil::logI($this->_logger, "Connected to $host:$port");

        $this->_connectionState
            ->setHost($host)
            ->setPort($port);
    }

    /**
     * @param string $host
     * @param int $port
     * @throws ConnectionException
     * @throws Exception\SocketException
     */
    public function connect(string $host, int $port): void
    {
        $this->createSocketConnection($host, $port);

        $this->_bridge = new SEPCPushBridge($this->_socket, $this->_logger);
        $this->_bridge->sendData(
            (new SDQLRequest())
                ->setSubscribeRequest(new SDQLSubscribeRequest(
                    $this->_connectionState->getSubscriptionSpecificationName()
                ))
        );
    }

    /**
     * @throws ConnectionException
     * @throws Exception\SocketException
     */
    public function reconnect(): void
    {
        $this->createSocketConnection($this->_connectionState->getHost(), $this->_connectionState->getPort());
        $this->_logger->info("Creating new socket connection...");
        $this->_bridge = new SEPCPushBridge($this->_socket, $this->_logger);
        $resumeRequest = (new SDQLRequest())->setResumeRequest(
            new SDQLUpdateDataResumeRequest(
                $this->_connectionState->getSubscriptionId(),
                $this->_connectionState->getSubscriptionSpecificationName(),
                $this->_connectionState->getSubscriptionChecksum(),
                $this->_connectionState->getLastBatchUuid()
            )
        );
        $this->_logger->debug("Sending resume request: ${resumeRequest}");
        $this->_bridge->sendData($resumeRequest);
    }

    /**
     * @return SDQLResponse|null
     * @throws ConnectionException
     * @throws Exception\SocketException
     * @throws SEPCException
     */
    public function getNextData(): ?SDQLResponse
    {
        try {
            $receivedData = $this->_bridge->receiveData();
        } catch (ConnectionException $connectionException) {
            throw $connectionException;
        }

        /** @var SDQLResponse|null $returnData */
        $returnData = null;

        if (null == $receivedData) {
            return null;
        }

        switch (true) {
            case !is_null($receivedData->getPingRequest()):
            {
                $id = $receivedData->getPingRequest()->getId();
                $pingResponse = new \OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLPingResponse($id);
                $request = (new SDQLRequest())->setPingResponse($pingResponse);
                $this->_bridge->sendData($request);

                break;
            }
            case !is_null($receivedData->getInitialData()):
            {
                LogUtil::logI($this->_logger, "Received initial data response with batch_id:{$receivedData->getInitialData()->getBatchId()}" .
                    " batches_left: {$receivedData->getInitialData()->getBatchesLeft()}...");

                $this->_connectionState->setInitialDataDumpComplete(
                    $receivedData->getInitialData()->isDumpComplete()
                );

                $this->_connectionState->setResumable(false);

                $returnData = $receivedData;
                break;
            }
            case !is_null($receivedData->getDataUpdates()) && count($receivedData->getDataUpdates()) > 0:
            {
                /** @var UpdateData $lastBatch */
                $lastBatch = null;
                foreach ($receivedData->getDataUpdates() as $batch) {
                    $lastBatch = $batch;
                }

                $this->_connectionState->setResumable(true);

                LogUtil::logI($this->_logger, "Received update data response last batch_uuid:{$lastBatch->getBatchUuid()}");

                $this->_connectionState->setLastBatchUuid($lastBatch->getBatchUuid());

                $returnData = $receivedData;
                break;
            }
            case !is_null($receivedData->getError()):
            {
                // TODO Return object with error or throw?

                if (400 === $receivedData->getError()->getCode()) {
                    $this->_connectionState->setResumable(false);
                }

                LogUtil::logW($this->_logger, "Received error with code {$receivedData->getError()->getCode()}: {$receivedData->getError()->getMessage()}");

                throw new SEPCException($receivedData->getError()->getMessage(), $receivedData->getError()->getCode());
            }
            case !is_null($receivedData->getSubscribeResponse()):
            {
                $this->_connectionState
                    ->setResumable(false)
                    ->setSubscriptionId($receivedData->getSubscribeResponse()->getSubscriptionId())
                    ->setSubscriptionChecksum($receivedData->getSubscribeResponse()->getSubscriptionChecksum());

                LogUtil::logI($this->_logger, "Received subscribe response with id {$this->_connectionState->getSubscriptionId()}");
                break;
            }
            case !is_null($receivedData->getUnsubscribeResponse()):
            {
                LogUtil::logI($this->_logger, "Received unsubscribe response...");
                break;
            }
            default:
            {
                if (!$this->isInitialDataDumpComplete()) {
                    $initialDataRequest = new SDQLGetNextInitialDataRequest($this->_connectionState->getSubscriptionId());
                    $request = (new SDQLRequest())->setInitialDataRequest($initialDataRequest);
                    $this->_bridge->sendData($request);
                } else {
                    $updateDataRequest = new SDQLGetNextUpdateDataRequest($this->_connectionState->getSubscriptionId());
                    $request = (new SDQLRequest())->setDataUpdateRequest($updateDataRequest);
                    $this->_bridge->sendData($request);
                }
            }
        }

        return $returnData;
    }

    public function isInitialDataDumpComplete(): bool
    {
        if (null == $this->_connectionState) {
            return false;
        }

        return $this->_connectionState->isInitialDataDumpComplete();
    }

    /**
     *
     */
    public function disconnectForced(): void
    {
        socket_close($this->_socket);
    }

    /**
     * @return SDQLResponse|null
     * @throws ConnectionException
     * @throws Exception\SocketException
     */
    public function disconnect(): ?SDQLResponse
    {
        $this->_bridge->sendData(
            (new SDQLRequest())
                ->setUnsubscribeRequest(new SDQLUnsubscribeRequest(
                        $this->_connectionState->getSubscriptionSpecificationName(),
                        $this->_connectionState->getSubscriptionId()
                    )
                )
        );

        $retriesLeft = 7;
        /** @var SDQLResponse|null $returnData */
        $returnData = null;
        while ($retriesLeft > 0) {
            $retriesLeft--;

            $response = $this->_bridge->receiveData();
            if (null != $response->getUnsubscribeResponse()) {
                $returnData = $response;
                break;
            }
        }

        socket_close($this->_socket);

        return $returnData;
    }

    /**
     * @return SEPCConnectionStateInterface
     */
    public function getConnectionState(): SEPCConnectionStateInterface
    {
        return $this->_connectionState;
    }
}