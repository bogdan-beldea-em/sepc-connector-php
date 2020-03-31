<?php

use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLSubscribeRequest;

require_once __DIR__ . "/../src/autoload_manual.php";

$url = "sept.oddsmatrix.com";
$port = 7000;

$socketStream = stream_socket_client("$url:$port");
var_dump($socketStream);

$serializer = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();
$subscribeRequest = (new SDQLRequest())
    ->setSubscribeRequest(new SDQLSubscribeRequest("test"));
$subscribeRequestData = $serializer->serialize($subscribeRequest, 'xml');

echo "$subscribeRequestData\n";
fwrite($socketStream, gzencode($subscribeRequestData));
fflush($socketStream);
$receivedData = '';
sleep(5);
while (!feof($socketStream)) {
    $receivedDataChunk = fread($socketStream, 128);
    $receivedData .= $receivedDataChunk;
    echo "$receivedDataChunk\n";
}

$decompressedData = gzdecode($receivedData);
echo "$decompressedData\n";

if (false !== $socketStream) {
    fclose($socketStream);
}