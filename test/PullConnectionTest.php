<?php

use OM\OddsMatrix\SEPC\Connector\Util\LogUtil;

require_once __DIR__ . "/../src/autoload_manual.php";

$initialDumpDone = false;
$serializer = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();
\OM\OddsMatrix\SEPC\Connector\Util\MemoryUsageUtil::setFilenameOverride("mem_profile_pull_no_dump.csv");

$logger = new StdoutLogger();

$connector = new \OM\OddsMatrix\SEPC\Connector\SEPCPullConnector(new \OM\OddsMatrix\SEPC\Connector\SEPCCredentials('test'), null, $logger);
$connection = $connector->connect("http://sept.oddsmatrix.com", 8081);

$requestCount = 0;
try {
    while (!$initialDumpDone) {
        $requestCount++;

        $data = $connection->getOneNextInitialData();
        if (!is_null($data)) {
            if (!is_null($data->getInitialData())) {
                if (!is_null($data->getInitialData()->getBatchesLeft())) {
                    LogUtil::logI($logger, "Finished request $requestCount, remaining: {$data->getInitialData()->getBatchesLeft()}...");
                } else {
                    LogUtil::logE($logger, "InitialData->batchesLeft is null, actual data: {$serializer->serialize($data, 'xml')}");
                }
                if (!is_null($data->getInitialData()->isDumpComplete())) {
                    $initialDumpDone = $data->getInitialData()->isDumpComplete();
                } else {
                    LogUtil::logE($logger, "InitialData->dumpComplete is null, actual data: {$serializer->serialize($data, 'xml')}");
                }
            } else {
                LogUtil::logE($logger, "Initial data is null, actual data: {$serializer->serialize($data, 'xml')}");
            }
        } else {
            LogUtil::logE($logger, "Null data received...");
        }

        \OM\OddsMatrix\SEPC\Connector\Util\MemoryUsageUtil::dumpMemoryUsage($requestCount);
    }
} catch (Exception $e) {
    LogUtil::logE($logger, $e);
}

for ($i = 0; $i < 1200; $i++) {
    sleep(35);
    $data = $connection->getNextUpdate();
    LogUtil::logI($logger, "Update request $i...");

    $requestCount++;
    \OM\OddsMatrix\SEPC\Connector\Util\MemoryUsageUtil::dumpMemoryUsage($requestCount);
}

$connection->disconnect();