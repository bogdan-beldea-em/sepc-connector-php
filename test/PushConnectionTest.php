<?php

require_once __DIR__ . "/../src/autoload_manual.php";

use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLSubscribeRequest;


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

    /** @var \JMS\Serializer\SerializerInterface $serializer */
    $serializer = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();

    $receivedData = null;
    $nullCount = 0;
    $receivedRequestCount = 0;
    $subscriptionId = null;
    $initialDataDumpDone = false;
    while ($nullCount <= 30) {
        sleep(1);
        $receivedData = $pushBridge->receiveData($receivedRequestCount);
        if (null != $receivedData) {
            $nullCount = 0;
            $receivedRequestCount++;

            $outFile = fopen("../resources_extra/push_response_$receivedRequestCount.xml", "w");
            fwrite($outFile, $serializer->serialize($receivedData, 'xml'));
            fflush($outFile);
            fclose($outFile);

            switch (true) {
                case null != $receivedData->getPingRequest():
                {
                    $id = $receivedData->getPingRequest()->getId();
                    $pingResponse = new \OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLPingResponse($id);
                    $request = (new SDQLRequest())->setPingResponse($pingResponse);
                    $pushBridge->sendData($request);

                    break;
                }
                case null != $receivedData->getInitialDataResponse():
                {
                    echo "Received initial data response...\n";
                    $initialDataDumpDone = $receivedData->getInitialDataResponse()->getInitialData()->isDumpComplete();

                    break;
                }
                case null != $receivedData->getInitialData(): {
                    $initialDataDumpDone = $receivedData->getInitialData()->isDumpComplete();

                    break;
                }
                case null != $receivedData->getUpdateDataResponse():
                {
                    echo "Received update data response..\n";
                    break;
                }
                case null != $receivedData->getDataUpdates() && count($receivedData->getDataUpdates()) > 0: {
                    echo "Received update data response..\n";

                    break;
                }
                case null != $receivedData->getError():
                {
                    echo "Received error with code {$receivedData->getError()->getCode()}: {$receivedData->getError()->getMessage()}\n";
                    break;
                }
                case null != $receivedData->getSubscribeResponse():
                {
                    $subscriptionId = $receivedData->getSubscribeResponse()->getSubscriptionId();
                    echo "Received subscribe response with id $subscriptionId\n";
                    break;
                }
                case null != $receivedData->getUnsubscribeResponse():
                {
                    echo "Received unsubscribe response...\n";
                    break;
                }
                default:
                {
                    if (!$initialDataDumpDone) {
                        $initialDataRequest = new \OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLGetNextInitialDataRequest($subscriptionId);
                        $request = (new SDQLRequest())->setInitialDataRequest($initialDataRequest);
                        $pushBridge->sendData($request);
                    } else {
                        $updateDataRequest = new \OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLGetNextUpdateDataRequest($subscriptionId);
                        $request = (new SDQLRequest())->setDataUpdateRequest($updateDataRequest);
                        $pushBridge->sendData($request);
                    }
                }
            }
        } else {
            echo "Received null..\n";
            $nullCount++;
        }
    }

    $file2 = fopen("../resources_extra/decompressed_response.txt", "w");
    fwrite($file2, print_r($receivedData, true));
    fflush($file2);
    fclose($file2);

    socket_close($socket);
}