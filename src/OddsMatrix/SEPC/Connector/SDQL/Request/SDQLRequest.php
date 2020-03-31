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
     * @var SDQLSubscribeRequest
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLSubscribeRequest")
     * @Serializer\SerializedName("SubscribeRequest")
     * @Serializer\XmlElement()
     */
    private $_subscribeRequest;

    /**
     * @param SDQLSubscribeRequest $subscribeRequest
     * @return SDQLRequest
     */
    public function setSubscribeRequest(SDQLSubscribeRequest $subscribeRequest): SDQLRequest
    {
        $this->_subscribeRequest = $subscribeRequest;
        return $this;
    }
}