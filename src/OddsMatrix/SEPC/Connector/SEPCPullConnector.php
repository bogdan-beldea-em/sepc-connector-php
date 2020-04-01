<?php

namespace OM\OddsMatrix\SEPC\Connector;


use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use OM\OddsMatrix\SEPC\Connector\Enum\Routes;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLSubscribeRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse;
use OM\OddsMatrix\SEPC\Connector\Util\QueryParamSerializer;
use OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider;

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

    public function __construct(SEPCCredentials $_credentials, SEPCConnectionStateInterface $connectionState = null)
    {
        $this->_connectionState = $connectionState;
        $this->_credentials = $_credentials;
        $this->_queryParamSerializer = new QueryParamSerializer();
        $this->_xmlSerializer = SDQLSerializerProvider::getSerializer();
    }

    public function connect(string $host, int $port): SEPCPullConnection
    {
        $request = new SDQLSubscribeRequest($this->_credentials->getSubscriptionSpecificationName());
        $url = $host . ':' . $port . Routes::XML_FEED . $this->_queryParamSerializer->serialize($request);

        echo "URL: $url\n";
        $responseData = gzdecode(file_get_contents($url));
        echo "Response data: $responseData \n";

        /** @var SDQLResponse $response */
        $response = $this->_xmlSerializer->deserialize($responseData, SDQLResponse::class, 'xml');
        echo "Deserialized\n";
        echo $this->_xmlSerializer->serialize($response, 'xml');

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

        return new SEPCPullConnection($this->_connectionState);
    }
}