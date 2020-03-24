<?php

require_once __DIR__ . "/../src/autoload_manual.php";

$connection = new \OM\OddsMatrix\SEPC\Connector\SEPCConnection(new \OM\OddsMatrix\SEPC\Connector\SEPCCredentials('test'));
$connection->connect();
$connection->disconnect();