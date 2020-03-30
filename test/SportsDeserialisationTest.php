<?php

require_once __DIR__ . "/../src/autoload_manual.php";

use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLSubscribeRequest;

$serializer = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();

$fileContents = file_get_contents("../resources_extra/request_dump_7.xml");
$data = $serializer->deserialize($fileContents, \OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse::class, 'xml');
echo $serializer->serialize($data, 'xml');