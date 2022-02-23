<?php

use OM\OddsMatrix\SEPC\Connector\SportsModel\EventInfo;

require_once __DIR__ . "/../src/autoload_manual.php";

$subscriptionSpecificationName = EnvVarProvider::getSubscriptionSpecificationName();
$pushEndpoint = EnvVarProvider::getPushEndpoint();
$pushPort = EnvVarProvider::getPushPort();

$logger = new StdoutLogger();
$connector = new \OM\OddsMatrix\SEPC\Connector\SEPCPushConnector(
    new \OM\OddsMatrix\SEPC\Connector\SEPCCredentials($subscriptionSpecificationName),
    $logger
);

$connector->connect($pushEndpoint, $pushPort);
for ($i = 0; $i < 50000; $i++) {
    $logger->info("Step $i");
    $sdqlResponse = $connector->getNextData();

    if (is_null($sdqlResponse)) {
        continue;
    }

    /** @var \OM\OddsMatrix\SEPC\Connector\SportsModel\UpdateData[] $dataUpdates */
    $dataUpdates = $sdqlResponse->getDataUpdates();

    foreach ($dataUpdates as $dataUpdate) {
        /** @var EventInfo[] $eventInfos */
        $eventInfos = $dataUpdate->getEventInfos();

        foreach ($eventInfos as $eventInfo) {
            if ($eventInfo->getTypeId() === 1) {
                assert(!is_null($eventInfo->getParamFloat1()), 'Param float 1 null for EventInfo type 1: ' . $eventInfo->getId());
                assert(!is_null($eventInfo->getParamFloat2()), 'Param float 2 null for EventInfo type 1: ' . $eventInfo->getId());
            }

        }
    }
}
