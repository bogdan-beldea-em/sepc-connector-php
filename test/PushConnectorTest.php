<?php

require_once __DIR__ . "/../src/autoload_manual.php";

$logger = new StdoutLogger();
$connector = new \OM\OddsMatrix\SEPC\Connector\SEPCPushConnector(
    new \OM\OddsMatrix\SEPC\Connector\SEPCCredentials("test"),
    $logger,
    null
);
$connector->connect("sept.oddsmatrix.com",7000);
for ($i = 0; $i < 100; $i++) {
    $connector->getNextData();
    $logger->info("Step $i");
}