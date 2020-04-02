<?php


namespace OM\OddsMatrix\SEPC\Connector;


use OM\OddsMatrix\SEPC\Connector\Exception\ConnectionException;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLSubscribeRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLUnsubscribeRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse;

class SEPCPushConnection
{
    private $_socket;

    /**
     * @var SEPCBasicConnectionState
     */
    private $_connectionState;

    /**
     * @var SEPCPushBridge
     */
    private $_bridge;

    /**
     * SEPCPushConnection constructor.
     * @param SEPCCredentials $credentials
     */
    public function __construct(SEPCCredentials $credentials)
    {

    }

    /**
     * @param string $host
     * @param int $port
     * @throws ConnectionException
     */
    public function connect(string $host, int $port): void
    {
        $this->_socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

        if (false === $this->_socket) {
            throw new ConnectionException();
        }

        socket_connect($this->_socket, $host, $port);

        if (false !== $this->_socket) {
            $pushBridge = new \OM\OddsMatrix\SEPC\Connector\SEPCPushBridge($this->_socket);
            $pushBridge->sendData(
                (new SDQLRequest())
                    ->setSubscribeRequest(new SDQLSubscribeRequest("test"))
            );
        } else {
            throw new ConnectionException();
        }
    }

    public function getNextData(): ?SDQLResponse
    {
        $receivedData = $this->_bridge->receiveData();

        /** @var SDQLResponse|null $returnData */
        $returnData = null;

        if (null == $receivedData) {
            return null;
        }

        switch (true) {
            case null != $receivedData->getPingRequest():
            {
                $id = $receivedData->getPingRequest()->getId();
                $pingResponse = new \OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLPingResponse($id);
                $request = (new SDQLRequest())->setPingResponse($pingResponse);
                $this->_bridge->sendData($request);

                break;
            }
            case null != $receivedData->getInitialDataResponse():
            {
                echo "Received initial data response...\n";
                $initialDataDumpDone = $receivedData->getInitialDataResponse()->getInitialData()->isDumpComplete();
                $returnData = $receivedData;

                break;
            }
            case null != $receivedData->getUpdateDataResponse():
            {
                echo "Received update data response..\n";
                $returnData = $receivedData;
                break;
            }
            case null != $receivedData->getError():
            {
                // TODO Return object with error or throw?

                echo "Received error with code {$receivedData->getError()->getCode()}: {$receivedData->getError()->getMessage()}\n";
                break;
            }
            case null != $receivedData->getSubscribeResponse():
            {
                $subscriptionId = $receivedData->getSubscribeResponse()->getSubscriptionId();
                echo "Received subscribe response with id $subscriptionId\n";
                break;
            }
            case null != $receivedData->getUnsubscribeResponse():
            {
                echo "Received unsubscribe response...\n";
                break;
            }
            default:
            {
                if (!$this->isInitialDataDumpComplete()) {
                    $initialDataRequest = new \OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLGetNextInitialDataRequest($this->_connectionState->getSubscriptionId());
                    $request = (new SDQLRequest())->setInitialDataRequest($initialDataRequest);
                    $this->_bridge->sendData($request);
                } else {
                    $updateDataRequest = new \OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLGetNextUpdateDataRequest($this->_connectionState->getSubscriptionId());
                    $request = (new SDQLRequest())->setDataUpdateRequest($updateDataRequest);
                    $this->_bridge->sendData($request);
                }
            }
        }

        return $returnData;
    }

    public function getNextInitialData(): ?SDQLResponse
    {

    }

    public function isInitialDataDumpComplete(): bool
    {
        if (null == $this->_connectionState) {
            return false;
        }

        return $this->_connectionState->isInitialDataDumpComplete();
    }

    /**
     * @return SDQLResponse|null
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
}