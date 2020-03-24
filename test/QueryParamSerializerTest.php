<?php

use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLSubscribeRequest;

require_once __DIR__ . "/../src/autoload_manual.php";

$serializer = new \OM\OddsMatrix\SEPC\Connector\Util\QueryParamSerializer();
$entity = new SDQLSubscribeRequest("asd");
echo $serializer->serialize($entity);