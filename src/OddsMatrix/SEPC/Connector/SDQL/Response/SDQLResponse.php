<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Response;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\SportsModel\InitialData;
use OM\OddsMatrix\SEPC\Connector\SportsModel\UpdateData;

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
     * @var InitialData|null
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SportsModel\InitialData")
     * @Serializer\SerializedName("InitialData")
     * @Serializer\XmlElement()
     */
    private $_initialData;

    /**
     * @var UpdateData[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\UpdateData>")
     * @Serializer\XmlList(inline=true, entry="UpdateData")
     */
    private $_dataUpdates;

    /**
     * @var SDQLUpdateDataResponse|null
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLUpdateDataResponse")
     * @Serializer\SerializedName("GetNextUpdateDataResponse")
     */
    private $_updateDataResponse;

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
     * @param array|null $array
     */
    public function __construct(array $array = null)
    {
        if (is_null($array)) {
            return;
        }

        if (array_key_exists( 'UpdateData', $array)) {
            $updateData = UpdateData::wrap($array['UpdateData']);
            $this->_dataUpdates = [$updateData];
        }

        if (array_key_exists('InitialData', $array)) {
            $this->_initialData = InitialData::wrap($array['InitialData']);
        }

        if (array_key_exists('PingRequest', $array)) {
            $this->_pingRequest = SDQLPingRequest::wrap($array['PingRequest']);
        }

        if (array_key_exists('error', $array)) {
            $this->_error = SDQLError::wrap($array['error']);
        }

        if (array_key_exists('SubscribeResponse', $array)) {
            $this->_subscribeResponse = SDQLSubscribeResponse::wrap($array['SubscribeResponse']);
        }
    }

    /**
     * @param array $wrapped_obj
     * @return SDQLResponse
     */
    public static function wrap(array $wrapped_obj): SDQLResponse
    {
        return new SDQLResponse($wrapped_obj);
    }

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
     * @return SDQLPingRequest|null
     */
    public function getPingRequest(): ?SDQLPingRequest
    {
        return $this->_pingRequest;
    }

    /**
     * @return InitialData|null
     */
    public function getInitialData(): ?InitialData
    {
        if (!is_null($this->_initialDataResponse)) {
            return $this->_initialDataResponse->getInitialData();
        }

        return $this->_initialData;
    }

    /**
     * @return UpdateData[]|null
     */
    public function getDataUpdates(): ?array
    {
        if (!is_null($this->_updateDataResponse)) {
            return $this->_updateDataResponse->getDataUpdates();
        }

        return $this->_dataUpdates;
    }
}