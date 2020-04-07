<?php

require_once __DIR__ . "/../src/autoload_manual.php";


$logger = new StdoutLogger();
$connector = new \OM\OddsMatrix\SEPC\Connector\SEPCPullConnector(
    new \OM\OddsMatrix\SEPC\Connector\SEPCCredentials("test"),
    null,
    $logger
);

$connector->connect("http://sept.oddsmatrix.com", 8081);
for ($i = 0; $i < 20; $i++) {
    $logger->info("Step $i");
    $connector->getNextData();
}
