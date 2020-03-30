<?php

require_once __DIR__ . "/../src/autoload_manual.php";

use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLSubscribeRequest;


$serializer = SerializerBuilder::create()
    ->setPropertyNamingStrategy(new CamelCaseNamingStrategy())
    ->build();

$file = fopen("../resources_extra/request_dump_1867.xml", "r");
$fileContents = fread($file, 1000000000);
fclose($file);
$data = $serializer->deserialize($fileContents, \OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse::class, 'xml');
$of = fopen("../resources_extra/aaa.xml", "w");
fwrite($of, $serializer->serialize($data, 'xml'));
fflush($of);
fclose($of);
