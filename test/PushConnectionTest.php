<?php


use OM\OddsMatrix\SEPC\Connector\Exception\ConnectionException;
use OM\OddsMatrix\SEPC\Connector\Exception\SocketException;
use OM\OddsMatrix\SEPC\Connector\Util\LogUtil;

require_once __DIR__ . "/../src/autoload_manual.php";


$url = "sept.oddsmatrix.com";
$port = 7000;

$serializer = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();
$logger = new StdoutLogger();
$connection = new \OM\OddsMatrix\SEPC\Connector\SEPCPushConnection(
    new \OM\OddsMatrix\SEPC\Connector\SEPCCredentials("test"),
    null,
    $logger
);

$connection->connect($url, $port);

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
                $connection->connect($url, $port);
            }
        } catch (SocketException|ConnectionException $e) {
            LogUtil::logW($logger, "Second error: $e");
        }
    }
    \OM\OddsMatrix\SEPC\Connector\Util\MemoryUsageUtil::dumpMemoryUsage($i);
}

$connection->disconnect();