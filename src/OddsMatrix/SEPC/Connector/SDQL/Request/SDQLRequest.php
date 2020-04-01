<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Request;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SDQLRequest
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Request
 *
 * @Serializer\XmlRoot(name="sdql")
 */
class SDQLRequest
{
    /**
     * @var SDQLSubscribeRequest|null
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLSubscribeRequest")
     * @Serializer\SerializedName("SubscribeRequest")
     * @Serializer\XmlElement()
     */
    private $_subscribeRequest;

    /**
     * @var SDQLPingResponse|null
     */
    private $_pingResponse;

    /**
     * @param SDQLSubscribeRequest|null $subscribeRequest
     * @return SDQLRequest
     */
    public function setSubscribeRequest(?SDQLSubscribeRequest $subscribeRequest): SDQLRequest
    {
        $this->_subscribeRequest = $subscribeRequest;
        return $this;
    }

    /**
     * @param SDQLPingResponse|null $pingResponse
     * @return SDQLRequest
     */
    public function setPingResponse(?SDQLPingResponse $pingResponse): SDQLRequest
    {
        $this->_pingResponse = $pingResponse;
        return $this;
    }
}