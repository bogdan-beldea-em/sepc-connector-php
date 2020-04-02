<?php


namespace OM\OddsMatrix\SEPC\Connector;


use JMS\Serializer\SerializerInterface;
use OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLRequest;
use OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse;
use OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider;

class SEPCPushBridge
{
    private $_socket;

    /**
     * @var SerializerInterface
     */
    private $_serializer;

    /**
     * SEPCPushBridge constructor.
     * @param $_socket
     */
    public function __construct($_socket)
    {
        $this->_socket = $_socket;
        $this->_serializer = SDQLSerializerProvider::getSerializer();
    }


    public function sendData(SDQLRequest $object): void
    {
        $dataToSend = $this->_serializer->serialize($object, 'xml');
        $dataToSend = preg_replace("/[\n]|[\r]/", "", $dataToSend);
        echo "Prepare to send $dataToSend\n";

        $compressedDataToSend = gzencode($dataToSend);
        $compressedDataLength = strlen($compressedDataToSend);
        $package = "$compressedDataLength\0$compressedDataToSend";
        $remainingDataToSend = strlen($package);

        while ($remainingDataToSend > 0) {
            $sentBytes = socket_write($this->_socket, $package);
            echo "Sent $sentBytes bytes...\n";
            $remainingDataToSend -= $sentBytes;
            $package = substr($package, $sentBytes);
        }
    }

    public function receiveData(int $i = 0): ?SDQLResponse
    {
        echo "Waiting for response...\n";
        $rawData = socket_read($this->_socket, "1");

        if (strlen($rawData) <= 0) {
            return null;
        }

        while (!preg_match("/[0-9]/", $rawData)) {
            $rawData = socket_read($this->_socket, "1");
        }

        $contentLengthString = '';
        while (preg_match("/[0-9]/", $rawData)) {
            echo "Received content_length info: $rawData\n";
            $contentLengthString .= $rawData;
            $rawData = socket_read($this->_socket, "1");
        }
        $contentLength = (int) $contentLengthString;
        echo "Actual content length: $contentLength\n";

        $content = '';
        while (strlen($content) < $contentLength) {
            $content .= socket_read($this->_socket, $contentLength);
            echo "Received content chunk...\n";
        }

        $response = gzdecode($content);

        $dumpFile = fopen("../resources_extra/bridge_dump_$i.xml", "w");
        fwrite($dumpFile, $response);
        fflush($dumpFile);
        fclose($dumpFile);

        return $this->_serializer->deserialize($response, SDQLResponse::class, 'xml');
    }
}