<?php


use OM\OddsMatrix\SEPC\Connector\Exception\ConnectionException;
use OM\OddsMatrix\SEPC\Connector\Exception\SocketException;
use OM\OddsMatrix\SEPC\Connector\Util\LogUtil;

require_once __DIR__ . "/../src/autoload_manual.php";

$subscriptionSpecificationName = EnvVarProvider::getSubscriptionSpecificationName();
$pushEndpoint = EnvVarProvider::getPushEndpoint();
$pushPort = EnvVarProvider::getPushPort();

$logger = new StdoutLogger();
$connection = new \OM\OddsMatrix\SEPC\Connector\SEPCPushConnection(
    new \OM\OddsMatrix\SEPC\Connector\SEPCCredentials($subscriptionSpecificationName),
    null,
    $logger
);

$connection->connect($pushEndpoint, $pushPort);

\OM\OddsMatrix\SEPC\Connector\Util\MemoryUsageUtil::setFilenameOverride("mem_profile_push_no_dump.csv");

for ($i = 0; $i < 2000; $i++) {
    LogUtil::logI($logger, "Step $i...");

    try {
        $data = $connection->getNextData();
    } catch (SocketException|ConnectionException $e) {
        LogUtil::logI($logger, "$e\n Reconnecting...");
        try {
            sleep(5);
            if ($connection->isInitialDataDumpComplete()) {
                $connection->reconnect();
            } else {
                $connection->connect($pushEndpoint, $pushPort);
            }
        } catch (SocketException|ConnectionException $e) {
            LogUtil::logW($logger, "Second error: $e");
        }
    }
    \OM\OddsMatrix\SEPC\Connector\Util\MemoryUsageUtil::dumpMemoryUsage($i);
}

$connection->disconnect();