<?php

namespace OM\OddsMatrix\SEPC\Connector;


use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use OM\OddsMatrix\SEPC\Connector\Enum\Routes;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLSubscribeRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse;
use OM\OddsMatrix\SEPC\Connector\Util\QueryParamSerializer;

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
     * @var
     */
    private $_connectionStateClass;

    public function __construct(SEPCCredentials $_credentials, string $connectionStateClass = null)
    {
        if (null != $connectionStateClass) {
            $reflectionClass = new \ReflectionClass($connectionStateClass);
            $connectionStateInterfaceName = array_filter($reflectionClass->getInterfaceNames(), function ($interfaceName) {
                return strcmp($interfaceName, SEPCConnectionStateInterface::class);
            });

            if (count($connectionStateInterfaceName) <= 0) {
                throw new \Exception("Connection state class should implement OM\OddsMatrix\SEPC\Connector");
            }

            $this->_connectionStateClass = $connectionStateClass;
        }
        $this->_credentials = $_credentials;
        $this->_queryParamSerializer = new QueryParamSerializer();
        $this->_xmlSerializer = SerializerBuilder::create()
            ->setPropertyNamingStrategy(new CamelCaseNamingStrategy())
            ->build();
    }

    public function connect(string $host, int $port): SEPCConnection
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
        $connectionState = null;
        if (null != $this->_connectionStateClass) {
            $reflectionClass = new \ReflectionClass($this->_connectionStateClass);
            $connectionState = $reflectionClass->newInstance();
        } else {
            $connectionState = new SEPCBasicConnectionState();
        }

        $connectionState
            ->setSubscriptionId($subscriptionId)
            ->setSubscriptionSpecificationName($this->_credentials->getSubscriptionSpecificationName())
            ->setHost($host)
            ->setPort($port);

        return new SEPCConnection($connectionState);
    }
}