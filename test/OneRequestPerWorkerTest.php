<?php

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\SEPCConnectionStateInterface;

require_once __DIR__ . "/../src/autoload_manual.php";

/**
 * Class PersistableConnection
 *
 * @Serializer\XmlRoot(name="PersistableConnection")
 */
class PersistableConnection implements SEPCConnectionStateInterface {

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("subscriptionId")
     * @Serializer\XmlAttribute()
     */
    private $_subscriptionId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("subscriptionSpecificationName")
     * @Serializer\XmlAttribute()
     */
    private $_subscriptionSpecificationName;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("port")
     * @Serializer\XmlAttribute()
     */
    private $_port;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("host")
     * @Serializer\XmlAttribute()
     */
    private $_host;

    /**
     * @var bool
     *
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("initialDataDumpComplete")
     * @Serializer\XmlAttribute()
     */
    private $_initialDataDumpComplete = false;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("count")
     * @Serializer\XmlAttribute()
     */
    private $_count = 0;

    /**
     * @return string
     */
    public function getSubscriptionId(): string
    {
        return $this->_subscriptionId;
    }

    /**
     * @param string $subscriptionId
     * @return PersistableConnection
     */
    public function setSubscriptionId(string $subscriptionId): PersistableConnection
    {
        $this->_subscriptionId = $subscriptionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubscriptionSpecificationName(): string
    {
        return $this->_subscriptionSpecificationName;
    }

    /**
     * @param string $subscriptionSpecificationName
     * @return PersistableConnection
     */
    public function setSubscriptionSpecificationName(string $subscriptionSpecificationName): PersistableConnection
    {
        $this->_subscriptionSpecificationName = $subscriptionSpecificationName;
        return $this;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->_port;
    }

    /**
     * @param int $port
     * @return PersistableConnection
     */
    public function setPort(int $port): PersistableConnection
    {
        $this->_port = $port;
        return $this;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->_host;
    }

    /**
     * @param string $host
     * @return PersistableConnection
     */
    public function setHost(string $host): PersistableConnection
    {
        $this->_host = $host;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInitialDataDumpComplete(): bool
    {
        return $this->_initialDataDumpComplete;
    }

    /**
     * @param bool $initialDataDumpComplete
     * @return PersistableConnection
     */
    public function setInitialDataDumpComplete(bool $initialDataDumpComplete): PersistableConnection
    {
        $this->_initialDataDumpComplete = $initialDataDumpComplete;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->_count;
    }

    /**
     * @param int $count
     * @return PersistableConnection
     */
    public function setCount(int $count): PersistableConnection
    {
        $this->_count = $count;
        return $this;
    }
}

$serializer = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();

const connectionStatePath = "../resources_extra/connection_state.xml";

/** @var PersistableConnection $connectionState */
$connectionState = null;
try {
    $connectionStateFile = fopen(connectionStatePath, "r");
    $connectionStateData = fread($connectionStateFile, 90000);
    fclose($connectionStateFile);
    $connectionState = $serializer->deserialize($connectionStateData, PersistableConnection::class, 'xml');
} catch (Exception $e) {

}

if (null == $connectionState) {
    $connector = new \OM\OddsMatrix\SEPC\Connector\SEPCPullConnector(new \OM\OddsMatrix\SEPC\Connector\SEPCCredentials('test'), new PersistableConnection());
    $connection = $connector->connect("http://sept.oddsmatrix.com", 8081);
    $connectionState = $connection->getConnectionState();
} else {
    $connection = new \OM\OddsMatrix\SEPC\Connector\SEPCConnection($connectionState);
}

$connection->setOnStateChanged(function (SEPCConnectionStateInterface $newState) {
    echo "New state\n";
    var_dump($newState);

    $serializer = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();

    try {
        $connectionStateData = $serializer->serialize($newState, 'xml');
        $file = fopen(connectionStatePath, "w");
        fwrite($file, $connectionStateData);
        fclose($file);
    } catch (Exception $e) {

    }
});

if ($connectionState->isInitialDataDumpComplete()) {
    try {
        $connection->getNextUpdate($connectionState->getCount() + 1000);
        sleep(35);
    } catch (Exception $e) {

    }
} else {
    try {
        $connection->getOneNextInitialData($connectionState->getCount());
    } catch (Exception $e) {

    }
}

$count = $connectionState->getCount();
if (is_int($count)) {
    $count++;
} else {
    $count = 0;
}

$connectionState->setCount($count);

$finalFile = fopen(connectionStatePath, "w");
fwrite($finalFile, $serializer->serialize($connectionState, 'xml'));
fflush($finalFile);
fclose($finalFile);
