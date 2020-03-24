<?php

require_once __DIR__ . "/../src/autoload_manual.php";

use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLSubscribeRequest;

$serializer = SerializerBuilder::create()
    ->setPropertyNamingStrategy(new CamelCaseNamingStrategy())
    ->build();

$entity = new SDQLSubscribeRequest("asd");
echo $serializer->serialize($entity, 'xml');