<?php

require_once __DIR__ . "/../src/autoload_manual.php";

$subscriptionSpecificationName = EnvVarProvider::getSubscriptionSpecificationName();
$pushEndpoint = EnvVarProvider::getPushEndpoint();
$pushPort = EnvVarProvider::getPushPort();
$logger = new StdoutLogger();
$state = new PersistableConnectionState();
$connector = new \OM\OddsMatrix\SEPC\Connector\SEPCPushConnector(
    new \OM\OddsMatrix\SEPC\Connector\SEPCCredentials($subscriptionSpecificationName),
    $logger,
    $state
);
$connector->connect($pushEndpoint,$pushPort);

$i = 0;
while ($i < 200000) {
    try {
        $data = $connector->getNextData();
        if (!is_null($data)) {
            $i++;
        }
    } catch (\OM\OddsMatrix\SEPC\Connector\Exception\ConnectionException $e) {
        $logger->error($e);
    } catch (\OM\OddsMatrix\SEPC\Connector\Exception\SEPCException $e) {
        $logger->error($e);
    } catch (\OM\OddsMatrix\SEPC\Connector\Exception\SocketException $e) {
        $logger->error($e);
    }

    $logger->info("Step $i");

    if ($connector->getConnectionState()->isInitialDataDumpComplete()) {
        break;
    }
}

$nextStep = $i + 20;
while ($i < $nextStep) {
    try {
        $data = $connector->getNextData();

        if (is_null($data)) {
            continue;
        }

        $updates = $data->getDataUpdates();

        if (is_null($updates)) {
            continue;
        }

        $updatesCount = count($updates);

        if (0 >= $updatesCount) {
            continue;
        }

        $lastBatchUuid = $updates[$updatesCount - 1]->getBatchUuid();
        $state->setLastBatchUuid($lastBatchUuid);
        $logger->info("Last ECB uuid: " . $lastBatchUuid);
        $i++;
    } catch (\OM\OddsMatrix\SEPC\Connector\Exception\ConnectionException $e) {
        $logger->error($e);
    } catch (\OM\OddsMatrix\SEPC\Connector\Exception\SEPCException $e) {
        $logger->error($e);
    } catch (\OM\OddsMatrix\SEPC\Connector\Exception\SocketException $e) {
        $logger->error($e);
    }
    $logger->info("Step $i");
}

$connector->disconnectForced();
$logger->info("Disconnected");

$nextStep = $i + 20000;
while ($i < $nextStep) {
    try {
        $data = $connector->getNextData();
        if (!is_null($data)) {
            $i++;
        } else {
            sleep(1);
        }
    } catch (\OM\OddsMatrix\SEPC\Connector\Exception\ConnectionException $e) {
        $logger->error($e);
    } catch (\OM\OddsMatrix\SEPC\Connector\Exception\SEPCException $e) {
        $logger->error($e);
    } catch (\OM\OddsMatrix\SEPC\Connector\Exception\SocketException $e) {
        $logger->error($e);
    }

    $logger->info("Step $i");
    $i++;
}