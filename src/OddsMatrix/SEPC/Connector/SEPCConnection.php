<?php


namespace OM\OddsMatrix\SEPC\Connector;


use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use OM\OddsMatrix\SEPC\Connector\Enum\Routes;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLGetNextInitialDataRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLGetNextUpdateDataRequest;
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
                echo "Request $i\n";

                $file = fopen("../resources_extra/request_dump_$i.xml", "w");
                fwrite($file, $responseData);
                fflush($file);
                fclose($file);

                try {
                    /** @var SDQLResponse $response */
                    $response = $this->_xmlSerializer->deserialize($responseData, SDQLResponse::class, 'xml');
                    $reserialized = $this->_xmlSerializer->serialize($response, 'xml');
//                    echo "Response: $reserialized\n";
                    $file2 = fopen("../resources_extra/request_reser_$i.xml", "w");
                    fwrite($file2, $reserialized);
                    fflush($file2);
                    fclose($file2);
                    if ($response->getInitialData()->getInitialData()->isDumpComplete()) {
                        break;
                    }
                } catch (\Exception $e) {
                    echo "L1 Error\n";
                    $file = fopen("../resources_extra/error_l1_$i.xml", "w");
                    fwrite($file, print_r($e, true));
                    fwrite($file, "\n\n\n\n");
                    fwrite($file, $responseData);
                    fflush($file);
                    fclose($file);
                }
            } catch (\Exception $e2) {
                Echo "L2 error:\n";
                $file = fopen("../resources_extra/error_l2_$i.log", "w");
                fwrite($file, print_r($e, true));
                fflush($file);
                fclose($file);
            }
        }
    }

    public function getNextUpdate(int $i) {
        $request = new SDQLGetNextUpdateDataRequest($this->_connectionState->getSubscriptionId());
        $url = $this->_connectionState->getHost() . ':' . $this->_connectionState->getPort() . Routes::XML_FEED . $this->_queryParamSerializer->serialize($request);

        echo "URL: $url \n";

        $responseData = gzdecode(file_get_contents($url));
//                echo "Response data: $responseData \n";
        echo "Request $i\n";

        $file = fopen("../resources_extra/request_dump_$i.xml", "w");
        fwrite($file, $responseData);
        fflush($file);
        fclose($file);
    }
}