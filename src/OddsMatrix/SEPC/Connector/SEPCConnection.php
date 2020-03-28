<?php


namespace OM\OddsMatrix\SEPC\Connector;


use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use OM\OddsMatrix\SEPC\Connector\Enum\Routes;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLGetNextInitialDataRequest;
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
     * @var function($newState)
     */
    private $_onStateChanged;

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

    public function disconnect(): void
    {
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

    public function setOnStateChanged($callback)
    {
        $this->_onStateChanged = $callback;
        $callback($this->_connectionState);
    }

    public function getNextInitialData()
    {
        $request = new SDQLGetNextInitialDataRequest($this->_connectionState->getSubscriptionId());
        $url = $this->_connectionState->getHost() . ':' . $this->_connectionState->getPort() . Routes::XML_FEED . $this->_queryParamSerializer->serialize($request);

        echo "URL: $url \n";

        for ($i = 0; $i < 1000; $i++) {
            try {
                $responseData = gzdecode(file_get_contents($url));
//                echo "Response data: $responseData \n";

                echo "Received: $i\n";
                $file = fopen("../resources_extra/request_dump_$i.xml", "w");
                fwrite($file, $responseData);
                fflush($file);
                fclose($file);

                try {
                    /** @var SDQLResponse $response */
                    $response = $this->_xmlSerializer->deserialize($responseData, SDQLResponse::class, 'xml');
                    if ($response->getInitialData()->getInitialData()->isDumpComplete()) {
                        break;
                    }
//                    $reserialized = $this->_xmlSerializer->serialize($response, 'xml');
//                    echo "Response: $reserialized\n";
                } catch (\Exception $e) {
                    echo "L1 Error\n";
                    var_dump($e);
                    $file = fopen("resources_extra/error_l1_$i.xml", "w");
                    fwrite($file, $responseData);
                    fflush($file);
                    fclose($file);
                }
            } catch (\Exception $e2) {
                Echo "L2 error:\n";
                var_dump($e2);
            }
        }
    }
}