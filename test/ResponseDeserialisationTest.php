<?php

use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;

require_once __DIR__ . "/../src/autoload_manual.php";

$responseData = "<?xml version=\"1.0\" encoding=\"UTF-8\"?><sdql><SubscribeResponse subscriptionId=\"70ed3151-fefc-4f04-bd7c-996fd599e6ba\" subscriptionChecksum=\"63457B2D2703FA794EF4197C7EB83E6F\"/></sdql>";

$xmlSerialiser = SerializerBuilder::create()
    ->setPropertyNamingStrategy(new CamelCaseNamingStrategy())
    ->build();

$top = 919;
for ($i = 0; $i <= $top; $i++) {
    echo "Deserializing $i of $top\n";
    $fileContents = file_get_contents("../resources_extra/request_dump_$i.xml");
    $deserialisedObj = $xmlSerialiser->deserialize($fileContents, \OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse::class, 'xml');
}

echo $xmlSerialiser->serialize($deserialisedObj, 'xml');