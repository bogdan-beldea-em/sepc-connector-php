<?php

require_once __DIR__ . "/../src/autoload_manual.php";


$serializer = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();

$fileContents = file_get_contents("../resources_extra/request_dump_1867.xml");
$data = $serializer->deserialize($fileContents, \OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse::class, 'xml');
$of = fopen("../resources_extra/aaa.xml", "w");
fwrite($of, $serializer->serialize($data, 'xml'));
fflush($of);
fclose($of);