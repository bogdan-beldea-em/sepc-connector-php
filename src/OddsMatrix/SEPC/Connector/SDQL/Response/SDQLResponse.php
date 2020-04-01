<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Response;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\SportsModel\InitialData;

/**
 * Class SDQLResponse
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Response
 *
 * @Serializer\XmlRoot(name="sdql")
 */
class SDQLResponse
{
    /**
     * @var SDQLSubscribeResponse|null
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLSubscribeResponse")
     * @Serializer\SerializedName("SubscribeResponse")
     */
    private $_subscribeResponse;

    /**
     * @var SDQLUnsubscribeResponse|null
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLUnsubscribeResponse")
     * @Serializer\SerializedName("UnsubscribeResponse")
     */
    private $_unsubscribeResponse;

    /**
     * @var SDQLInitialDataResponse|null
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLInitialDataResponse")
     * @Serializer\SerializedName("GetNextInitialDataResponse")
     */
    private $_initialDataResponse;

    /**
     * @var SDQLUpdateDataResponse|null
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLUpdateDataResponse")
     * @Serializer\SerializedName("GetNextUpdateDataResponse")
     */
    private $_updateData;

    /**
     * @var SDQLError|null
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLError")
     * @Serializer\SerializedName("error")
     */
    private $_error;

    /**
     * @var SDQLPingRequest|null
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLPingRequest")
     * @Serializer\SerializedName("PingRequest")
     */
    private $_pingRequest;

    /**
     * @return SDQLSubscribeResponse
     */
    public function getSubscribeResponse(): ?SDQLSubscribeResponse
    {
        return $this->_subscribeResponse;
    }

    /**
     * @return SDQLUnsubscribeResponse
     */
    public function getUnsubscribeResponse(): ?SDQLUnsubscribeResponse
    {
        return $this->_unsubscribeResponse;
    }

    /**
     * @return SDQLError
     */
    public function getError(): ?SDQLError
    {
        return $this->_error;
    }

    /**
     * @return SDQLInitialDataResponse
     */
    public function getInitialDataResponse(): ?SDQLInitialDataResponse
    {
        return $this->_initialDataResponse;
    }

    /**
     * @return SDQLUpdateDataResponse
     */
    public function getUpdateData(): ?SDQLUpdateDataResponse
    {
        return $this->_updateData;
    }
}