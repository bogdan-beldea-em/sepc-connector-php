<?php


namespace OM\OddsMatrix\SEPC\Connector;


use JMS\Serializer\SerializerInterface;
use OM\OddsMatrix\SEPC\Connector\Enum\Routes;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLGetNextInitialDataRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLGetNextUpdateDataRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLUnsubscribeRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse;
use OM\OddsMatrix\SEPC\Connector\Util\LogUtil;
use OM\OddsMatrix\SEPC\Connector\Util\QueryParamSerializer;
use OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider;
use Psr\Log\LoggerInterface;

/**
 * Class SEPCPullConnection
 * @package OM\OddsMatrix\SEPC\Connector
 */
class SEPCPullConnection
{
    /**
     * @var QueryParamSerializer
     */
    private $_queryParamSerializer;

    /**
     * @var SerializerInterface
     */
    private $_xmlSerializer;

    /**
     * @var SEPCConnectionStateInterface
     */
    private $_connectionState;

    /**
     * @var LoggerInterface
     */
    private $_logger;

    /**
     * SEPCPullConnection constructor.
     * @param SEPCConnectionStateInterface $_connectionState
     * @param LoggerInterface|null $logger
     */
    public function __construct(SEPCConnectionStateInterface $_connectionState, LoggerInterface $logger = null)
    {
        $this->_connectionState = $_connectionState;
        $this->_queryParamSerializer = new QueryParamSerializer();
        $this->_xmlSerializer = SDQLSerializerProvider::getSerializer();
    }

    public function disconnect(): ?SDQLResponse
    {
        LogUtil::logI($this->_logger, "Disconnect");
        $request = new SDQLUnsubscribeRequest($this->_connectionState->getSubscriptionSpecificationName(), $this->_connectionState->getSubscriptionId());
        $url = $this->_connectionState->getHost() . ':' . $this->_connectionState->getPort() . Routes::XML_FEED . $this->_queryParamSerializer->serialize($request);

        $responseData = gzdecode(file_get_contents($url));

        LogUtil::logD($this->_logger, "Disconnect response: $responseData");

        /** @var SDQLResponse $response */
        $response = $this->_xmlSerializer->deserialize($responseData, SDQLResponse::class, 'xml');

        return $response;
    }

    /**
     * @return SDQLResponse
     */
    public function getOneNextInitialData(): ?SDQLResponse
    {
        $request = new SDQLGetNextInitialDataRequest($this->_connectionState->getSubscriptionId());
        $url = $this->_connectionState->getHost() . ':' . $this->_connectionState->getPort() . Routes::XML_FEED . $this->_queryParamSerializer->serialize($request);

        LogUtil::logD($this->_logger, "GET $url");

        try {
            $responseData = gzdecode(file_get_contents($url));
            LogUtil::logD($this->_logger, "Response data: $responseData");

            /** @var SDQLResponse $response */
            $response = $this->_xmlSerializer->deserialize($responseData, SDQLResponse::class, 'xml');

            if (is_null($response)) {
                return null;
            }

            if (!is_null($response->getInitialData())) {
                if ($response->getInitialData()->isDumpComplete()) {
                    $this->_connectionState->setInitialDataDumpComplete(true);
                }
            }

            return $response;
        } catch (\Exception $e) {
            LogUtil::logE($this->_logger, $e);
        }

        return null;
    }

    /**
     * @return SDQLResponse|null
     */
    public function getNextUpdate(): ?SDQLResponse
    {
        $request = new SDQLGetNextUpdateDataRequest($this->_connectionState->getSubscriptionId());
        $url = $this->_connectionState->getHost() . ':' . $this->_connectionState->getPort() . Routes::XML_FEED . $this->_queryParamSerializer->serialize($request);
        LogUtil::logD($this->_logger, "GET $url");

        try {
            $responseData = gzdecode(file_get_contents($url));
            LogUtil::logD($this->_logger, "Response data: $responseData");

            return $this->_xmlSerializer->deserialize($responseData, SDQLResponse::class, 'xml');
        } catch (\Exception $e) {

        }

        return null;
    }

    /**
     * @return SEPCConnectionStateInterface
     */
    public function getConnectionState(): SEPCConnectionStateInterface
    {
        return $this->_connectionState;
    }
}