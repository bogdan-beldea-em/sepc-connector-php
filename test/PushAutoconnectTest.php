<?php

require_once __DIR__ . "/../src/autoload_manual.php";

$subscriptionSpecificationName = EnvVarProvider::getSubscriptionSpecificationName();
$pushEndpoint = EnvVarProvider::getPushEndpoint();
$pushPort = EnvVarProvider::getPushPort();
$logger = new StdoutLogger();
$connector = new \OM\OddsMatrix\SEPC\Connector\SEPCPushConnector(
    new \OM\OddsMatrix\SEPC\Connector\SEPCCredentials($subscriptionSpecificationName),
    $logger,
    null
);
$connector->autoconnect($pushEndpoint,$pushPort);
for ($i = 0; $i < 100; $i++) {
    $connector->getNextData();
}