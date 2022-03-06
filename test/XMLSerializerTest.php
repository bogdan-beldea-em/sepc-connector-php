<?php

require_once __DIR__ . "/../src/autoload_manual.php";

use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLSubscribeRequest;

$serializer = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();

$entity = new SDQLSubscribeRequest("asd");

echo json_encode(['a' => 1, 'b' => null], JSON_THROW_ON_ERROR);
echo "\n";