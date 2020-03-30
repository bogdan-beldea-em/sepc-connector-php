<?php

require_once __DIR__ . "/../src/autoload_manual.php";

$responseData = "<?xml version=\"1.0\" encoding=\"UTF-8\"?><sdql><UnsubscribeResponse code=\"0\" message=\"Unsubscribe Subscription [subscriptionSpecificationName=test, subscriptionId=aa69fa38-e42b-4b20-906a-b7cab75a422a, ip=86.120.234.122, creationDate=Tue Mar 24 15:36:48 UTC 2020]\"/></sdql>";
$serializer = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();

$object = $serializer->deserialize($responseData, \OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse::class, 'xml');
echo $serializer->serialize($object, 'xml');