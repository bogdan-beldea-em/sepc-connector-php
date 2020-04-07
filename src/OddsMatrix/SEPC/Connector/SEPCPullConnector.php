<?php

namespace OM\OddsMatrix\SEPC\Connector;


use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use OM\OddsMatrix\SEPC\Connector\Enum\Routes;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLSubscribeRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse;
use OM\OddsMatrix\SEPC\Connector\Util\LogUtil;
use OM\OddsMatrix\SEPC\Connector\Util\QueryParamSerializer;
use OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider;
use Psr\Log\LoggerInterface;

class SEPCPullConnector
{
    /**
     * @var SEPCCredentials
     */
    private $_credentials;

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
     * @var SEPCPullConnection;
     */
    private $_connection;

    /**
     * SEPCPullConnector constructor.
     * @param SEPCCredentials $_credentials
     * @param LoggerInterface|null $logger
     * @param SEPCConnectionStateInterface|null $connectionState
     * @throws \ReflectionException
     */
    public function __construct(?SEPCCredentials $_credentials, ?LoggerInterface $logger = null, ?SEPCConnectionStateInterface $connectionState = null)
    {
        $this->_connectionState = $connectionState;
        $this->_credentials = $_credentials;
        $this->_logger = $logger;
        $this->_queryParamSerializer = new QueryParamSerializer();
        $this->_xmlSerializer = SDQLSerializerProvider::getSerializer();

        if (null != $connectionState) {
            $this->_connection = new SEPCPullConnection($this->_connectionState, $this->_logger);
        }
    }

    /**
     * @param string $host
     * @param int $port
     * @return SEPCPullConnection
     * @throws \Doctrine\Common\Annotations\AnnotationException
     * @throws \ReflectionException
     */
    public function connect(string $host, int $port): SEPCPullConnection
    {
        $request = new SDQLSubscribeRequest($this->_credentials->getSubscriptionSpecificationName());
        $url = $host . ':' . $port . Routes::XML_FEED . $this->_queryParamSerializer->serialize($request);
        LogUtil::logD($this->_logger, "GET $url");

        $responseData = gzdecode(file_get_contents($url));
        LogUtil::logD($this->_logger, "Response data: $responseData ");

        /** @var SDQLResponse $response */
        $response = $this->_xmlSerializer->deserialize($responseData, SDQLResponse::class, 'xml');

        $subscriptionId = $response->getSubscribeResponse()->getSubscriptionId();

        /** @var SEPCConnectionStateInterface $connectionState */
        if (null == $this->_connectionState) {
            $this->_connectionState = new SEPCBasicConnectionState();
        }

        $this->_connectionState
            ->setSubscriptionId($subscriptionId)
            ->setSubscriptionSpecificationName($this->_credentials->getSubscriptionSpecificationName())
            ->setHost($host)
            ->setPort($port);

        $this->_connection = new SEPCPullConnection($this->_connectionState, $this->_logger);

        return $this->_connection;
    }

    /**
     * @return SDQLResponse|null
     * @throws \Doctrine\Common\Annotations\AnnotationException
     * @throws \ReflectionException
     */
    public function getNextData(): ?SDQLResponse
    {
        /** @var SDQLResponse|null $data */
        $data = null;

        if (is_null($this->_connection) || is_null($this->_connection->getConnectionState())) {
            LogUtil::logC($this->_logger, "Cannot retrieve data from connection before calling the connect method");

            return null;
        }

        if ($this->_connection->getConnectionState()->isInitialDataDumpComplete()) {
            $data = $this->_connection->getNextUpdate();
        } else {
            $data = $this->_connection->getOneNextInitialData();
        }

        return $data;
    }

    /**
     * @return bool
     */
    public function isInitialDataDumpComplete(): bool
    {
        if (is_null($this->_connection)) {
            return false;
        }

        if (is_null($this->_connection->getConnectionState())) {
            return false;
        }

        if (is_null($this->_connection->getConnectionState()->isInitialDataDumpComplete())) {
            return false;
        }

        return $this->_connection->getConnectionState()->isInitialDataDumpComplete();
    }

    /**
     * @return SEPCConnectionStateInterface
     */
    public function getConnectionState(): SEPCConnectionStateInterface
    {
        return $this->_connection->getConnectionState();
    }
}