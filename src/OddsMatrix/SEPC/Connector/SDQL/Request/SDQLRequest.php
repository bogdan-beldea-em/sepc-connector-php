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
     * @var SDQLUpdateDataResumeRequest
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Request\SDQLUpdateDataResumeRequest")
     * @Serializer\SerializedName("UpdateDataResumeRequest")
     * @Serializer\XmlElement()
     */
    private $_resumeRequest;

    /**
     * @return array
     */
    public function toArray(): array
    {
        if (!is_null($this->_subscribeRequest)) {
            return ['SubscribeRequest' => $this->_subscribeRequest->toArray()];
        }

        if (!is_null($this->_pingResponse)) {
            return ['PingResponse' => $this->_pingResponse->toArray()];
        }

        if (!is_null($this->_resumeRequest)) {
            return ['UpdateDataResumeRequest' => $this->_resumeRequest->toArray()];
        }

        return [];
    }

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

    /**
     * @param SDQLUpdateDataResumeRequest $resumeRequest
     * @return SDQLRequest
     */
    public function setResumeRequest(SDQLUpdateDataResumeRequest $resumeRequest): SDQLRequest
    {
        $this->_resumeRequest = $resumeRequest;
        return $this;
    }

    public function __toString()
    {
        if (!is_null($this->_resumeRequest)) {
            return "SDQLRequest[resumeRequest: " . $this->_resumeRequest . "]";
        }

        return "SDQLRequest[empty]";
    }
}