<?php

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\SEPCConnectionStateInterface;

require_once __DIR__ . "/../src/autoload_manual.php";


$subscriptionSpecificationName = EnvVarProvider::getSubscriptionSpecificationName();
$connectionStatePath = EnvVarProvider::getConnectionStatePath();
$pullEndpoint = EnvVarProvider::getPullEndpoint();
$pullPort = EnvVarProvider::getPullPort();

/** @var PersistableConnectionState $connectionState */
$connectionState = null;
try {
    $connectionStateData = file_get_contents($connectionStatePath);
    $connectionState = PersistableConnectionState::wrap(json_decode($connectionStateData));
} catch (Exception $e) {

}

$logger = new StdoutLogger();

if (null == $connectionState) {
    $connector = new \OM\OddsMatrix\SEPC\Connector\SEPCPullConnector(new \OM\OddsMatrix\SEPC\Connector\SEPCCredentials($subscriptionSpecificationName), $logger, new PersistableConnectionState());
    $connection = $connector->connect($pullEndpoint, $pullPort);
    $connectionState = $connection->getConnectionState();
} else {
    $connector = new \OM\OddsMatrix\SEPC\Connector\SEPCPullConnector(null, $logger, $connectionState);
//    $connection = new \OM\OddsMatrix\SEPC\Connector\SEPCPullConnection($connectionState);
}

if ($connectionState->isInitialDataDumpComplete()) {
    try {
        $connector->getNextData();
        sleep(3);
    } catch (Exception $e) {

    }
} else {
    try {
        $connector->getNextData();
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

file_put_contents($connectionStatePath, json_encode($connectionState->toArray()));
