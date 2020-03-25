<?php


namespace OM\OddsMatrix\SEPC\Connector;


use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use OM\OddsMatrix\SEPC\Connector\Enum\Routes;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLUnsubscribeRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse;
use OM\OddsMatrix\SEPC\Connector\Util\QueryParamSerializer;

class SEPCConnection
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
     * SEPCConnection constructor.
     * @param SEPCConnectionStateInterface $_connectionState
     */
    public function __construct(SEPCConnectionStateInterface $_connectionState)
    {
        $this->_connectionState = $_connectionState;
        $this->_queryParamSerializer = new QueryParamSerializer();
        $this->_xmlSerializer = SerializerBuilder::create()
            ->setPropertyNamingStrategy(new CamelCaseNamingStrategy())
            ->build();
    }

    public function disconnect() {
        echo "\nDisconnect\n";
        $request = new SDQLUnsubscribeRequest($this->_connectionState->getSubscriptionSpecificationName(), $this->_connectionState->getSubscriptionId());
        $url = $this->_connectionState->getHost() . ':' . $this->_connectionState->getPort() . Routes::XML_FEED . $this->_queryParamSerializer->serialize($request);

        echo 'URL:' . $url . "\n";

        $responseData = gzdecode(file_get_contents($url));

        echo 'Response data: ' . $responseData . "\n";

        /** @var SDQLResponse $response */
        $response = $this->_xmlSerializer->deserialize($responseData, SDQLResponse::class, 'xml');
        echo "Deserialised:\n" . $this->_xmlSerializer->serialize($response, 'xml') . "\n";
    }
}