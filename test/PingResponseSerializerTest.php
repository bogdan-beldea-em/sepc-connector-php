<?php

require_once __DIR__ . "/../src/autoload_manual.php";


$serializer = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();

$pingResponse = new \OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLPingResponse("123");
echo $serializer->serialize($pingResponse, 'xml');