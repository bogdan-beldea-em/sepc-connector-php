<?php

use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLSubscribeRequest;

require_once __DIR__ . "/../src/autoload_manual.php";

$url = "sept.oddsmatrix.com";
$port = 7000;

//$socketStream = stream_socket_client("$url:$port");
//
//$serializer = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();
//$subscribeRequest = (new SDQLRequest())
//    ->setSubscribeRequest(new SDQLSubscribeRequest("test"));
//$subscribeRequestData = $serializer->serialize($subscribeRequest, 'xml');
//preg_replace("\n", "", $subscribeRequestData);
//echo "$subscribeRequestData\n";
//$compressedRequestData = gzencode($subscribeRequestData);
//$requestSize = strlen($compressedRequestData);
//$requestBody = $requestSize . "\0" . $compressedRequestData;
//fwrite($socketStream, $requestBody);
//fflush($socketStream);
//
//sleep(60);
//$gzipLengthString = '';
//while (!feof($socketStream)) {
//    $receivedDataChunk = fread($socketStream, 1);
//    if (preg_match("/[0-9]/", $receivedDataChunk)) {
//        $gzipLengthString .= $receivedDataChunk;
//    } else if ($receivedDataChunk == "\0") {
//        break;
//    }
//}
//
//$gzipLength = (int) $gzipLengthString;
//$receivedData = fread($socketStream, $gzipLength);
//echo "Received data\n";
//
//$file1 = fopen("../resources_extra/raw_response.txt", "w");
//fwrite($file1, $receivedData);
//fflush($file1);
//fclose($file1);
//
//$decompressedData = gzdecode($receivedData);

$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
socket_connect($socket, $url, $port);
if (false !== $socket) {
    $pushBridge = new \OM\OddsMatrix\SEPC\Connector\SEPCPushBridge($socket);
    $pushBridge->sendData(
        (new SDQLRequest())
            ->setSubscribeRequest(new SDQLSubscribeRequest("test"))
    );

    $receivedData = null;
    while (null == $receivedData) {
        sleep(30);
        $receivedData = $pushBridge->receiveData();
    }

    $file2 = fopen("../resources_extra/decompressed_response.txt", "w");
    fwrite($file2, print_r($receivedData, true));
    fflush($file2);
    fclose($file2);

    socket_close($socket);
}