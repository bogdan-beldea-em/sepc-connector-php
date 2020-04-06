<?php

require_once __DIR__ . "/../src/autoload_manual.php";

$serializer = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();
$request = new \OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLUpdateDataResumeRequest("a", "b", "c", "d");
$data = new \OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLRequest();
$data->setResumeRequest($request);

echo $serializer->serialize($data, 'xml');

