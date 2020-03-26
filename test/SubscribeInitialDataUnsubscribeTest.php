<?php

require_once __DIR__ . "/../src/autoload_manual.php";

$connector = new \OM\OddsMatrix\SEPC\Connector\SEPCPullConnector(new \OM\OddsMatrix\SEPC\Connector\SEPCCredentials('test'));
$connection = $connector->connect("http://sept.oddsmatrix.com", 8081);
$connection->setOnStateChanged(function (\OM\OddsMatrix\SEPC\Connector\SEPCConnectionStateInterface $newState) {
    echo "New state\n";
    var_dump($newState);
});

try {
    $connection->getNextInitialData();
} catch (Exception $e) {

}

$connection->disconnect();