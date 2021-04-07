<?php

require_once __DIR__ . "/../src/autoload_manual.php";

$subscriptionSpecificationName = EnvVarProvider::getSubscriptionSpecificationName();
$outputDataDir = EnvVarProvider::getOutputDataDirectory();
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

$serializeDataToDirIfEnvVarAvailable = function (int $index, \OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse $SDQLResponse) use ($outputDataDir, $logger) {
    if (!is_null($outputDataDir)) {
        $serializer = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();
        $serializedData = $serializer->serialize($SDQLResponse, 'xml');
        $outputFileName = $outputDataDir . "/$index.xml";
        $return = file_put_contents($outputFileName, $serializedData);
        if (false === $return) {
            $logger->error("Could not write to output file $outputFileName");
        }
    }
};

$i = 0;
while ($i < 200000) {
    try {
        $data = $connector->getNextData();

        if (is_null($data)) {
            $logger->info("No data available");
            sleep(1);
            continue;
        }

        $updates = $data->getDataUpdates();

        if (is_null($updates)) {
            $logger->info("No updates available on data");
            sleep(1);
            continue;
        }

        $error = $data->getError();
        if (!is_null($error)) {
            $logger->error("Error ${$error}");
            $serializeDataToDirIfEnvVarAvailable($i, $data);
            continue;
        }

        $updatesCount = count($updates);

        if (0 >= $updatesCount) {
            sleep(1);
            continue;
        }

        $serializeDataToDirIfEnvVarAvailable($i, $data);
        $i++;
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
            $logger->info("No data available");
            sleep(1);
            continue;
        }

        $updates = $data->getDataUpdates();

        if (is_null($updates)) {
            $logger->info("No updates available on data");
            sleep(1);
            continue;
        }

        $error = $data->getError();
        if (!is_null($error)) {
            $logger->error("Error ${$error}");
            $serializeDataToDirIfEnvVarAvailable($i, $data);
            continue;
        }

        $updatesCount = count($updates);

        if (0 >= $updatesCount) {
            sleep(1);
            continue;
        }

        $lastBatchUuid = $updates[$updatesCount - 1]->getBatchUuid();
        $state->setLastBatchUuid($lastBatchUuid);
        $logger->info("Last ECB uuid: " . $lastBatchUuid);
        $serializeDataToDirIfEnvVarAvailable($i, $data);
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