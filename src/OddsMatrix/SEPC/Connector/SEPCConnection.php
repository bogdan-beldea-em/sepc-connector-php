<?php


namespace OM\OddsMatrix\SEPC\Connector;


use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use OM\OddsMatrix\SEPC\Connector\Enum\Routes;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLSubscribeRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLUnsubscribeRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse;
use OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLSubscribeResponse;
use OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLUnsubscribeResponse;
use OM\OddsMatrix\SEPC\Connector\Util\QueryParamSerializer;

class SEPCConnection
{
    /**
     * @var SEPCCredentials
     */
    private $_credentials;

    /**
     * @var string
     * TODO read from a yaml config file
     */
    private $_host = 'http://sept.oddsmatrix.com';

    /**
     * @var int
     * TODO read from a yaml config file
     */
    private $_port = 8081;

    /**
     * @var QueryParamSerializer
     */
    private $_queryParamSerializer;

    private $_xmlSerializer;

    private $_subscriptionId;

    /**
     * SEPCConnection constructor.
     * @param SEPCCredentials $_credentials
     */
    public function __construct(SEPCCredentials $_credentials)
    {
        $this->_credentials = $_credentials;
        $this->_queryParamSerializer = new QueryParamSerializer();
        $this->_xmlSerializer = SerializerBuilder::create()
            ->setPropertyNamingStrategy(new CamelCaseNamingStrategy())
            ->build();
    }

    public function connect() {
        $request = new SDQLSubscribeRequest($this->_credentials->getSubscriptionSpecificationName());
        $url = $this->_host . ':' . $this->_port . Routes::XML_FEED . $this->_queryParamSerializer->serialize($request);

        echo "URL: $url\n";
        $responseData = gzdecode(file_get_contents($url));
        echo "Response data: $responseData \n";

        /** @var SDQLResponse $response */
        $response = $this->_xmlSerializer->deserialize($responseData, SDQLResponse::class, 'xml');
        echo "Deserialized\n";
        echo $this->_xmlSerializer->serialize($response, 'xml');

        $this->_subscriptionId = $response->getSubscribeResponse()->getSubscriptionId();
    }

    public function disconnect() {
        echo "\nDisconnect\n";
        $request = new SDQLUnsubscribeRequest($this->_credentials->getSubscriptionSpecificationName(), $this->_subscriptionId);
        $url = $this->_host . ':' . $this->_port . Routes::XML_FEED . $this->_queryParamSerializer->serialize($request);

        echo 'URL:' . $url . "\n";

        $responseData = gzdecode(file_get_contents($url));

        echo 'Response data: ' . $responseData . "\n";

        /** @var SDQLResponse $response */
        $response = $this->_xmlSerializer->deserialize($responseData, SDQLResponse::class, 'xml');
        echo "Deserialised:\n" . $this->_xmlSerializer->serialize($response, 'xml') . "\n";
    }
}