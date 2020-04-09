<?php

require_once __DIR__ . "/../src/autoload_manual.php";

$subscriptionSpecificationName = EnvVarProvider::getSubscriptionSpecificationName();
$pullEndpoint = EnvVarProvider::getPullEndpoint();
$pullPort = EnvVarProvider::getPullPort();

$logger = new StdoutLogger();
$connector = new \OM\OddsMatrix\SEPC\Connector\SEPCPullConnector(
    new \OM\OddsMatrix\SEPC\Connector\SEPCCredentials($subscriptionSpecificationName),
    $logger
);

$connector->connect($pullEndpoint, $pullPort);
for ($i = 0; $i < 20; $i++) {
    $logger->info("Step $i");
    $connector->getNextData();
}
