<?php

use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;

require_once __DIR__ . "/../src/autoload_manual.php";

$xmlSerialiser = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();

$top = 919;
for ($i = 0; $i <= $top; $i++) {
    echo "Deserializing $i of $top\n";
    $fileContents = file_get_contents("../resources_extra/request_dump_$i.xml");
    $deserialisedObj = $xmlSerialiser->deserialize($fileContents, \OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse::class, 'xml');
}

echo $xmlSerialiser->serialize($deserialisedObj, 'xml');