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
     * @var SDQLUnsubscribeRequest|null
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLUnsubscribeRequest")
     * @Serializer\SerializedName("UnsubscribeRequest")
     * @Serializer\XmlElement()
     */
    private $_unsubscribeRequest;

    /**
     * @var SDQLPingResponse|null
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLPingResponse")
     * @Serializer\SerializedName("PingResponse")
     * @Serializer\XmlElement()
     */
    private $_pingResponse;

    /**
     * @var SDQLGetNextInitialDataRequest|null
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLGetNextInitialDataRequest")
     * @Serializer\SerializedName("GetNextInitialDataRequest")
     * @Serializer\XmlElement()
     */
    private $_initialDataRequest;

    /**
     * @var SDQLGetNextUpdateDataRequest|null
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLGetNextUpdateDataRequest")
     * @Serializer\SerializedName("GetNextUpdateDataRequest")
     * @Serializer\XmlElement()
     */
    private $_dataUpdateRequest;

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

    /**
     * @param SDQLGetNextInitialDataRequest|null $initialDataRequest
     * @return SDQLRequest
     */
    public function setInitialDataRequest(?SDQLGetNextInitialDataRequest $initialDataRequest): SDQLRequest
    {
        $this->_initialDataRequest = $initialDataRequest;
        return $this;
    }

    /**
     * @param SDQLGetNextUpdateDataRequest|null $dataUpdateRequest
     * @return SDQLRequest
     */
    public function setDataUpdateRequest(?SDQLGetNextUpdateDataRequest $dataUpdateRequest): SDQLRequest
    {
        $this->_dataUpdateRequest = $dataUpdateRequest;
        return $this;
    }

    /**
     * @param SDQLUnsubscribeRequest|null $unsubscribeRequest
     * @return SDQLRequest
     */
    public function setUnsubscribeRequest(?SDQLUnsubscribeRequest $unsubscribeRequest): SDQLRequest
    {
        $this->_unsubscribeRequest = $unsubscribeRequest;
        return $this;
    }
}