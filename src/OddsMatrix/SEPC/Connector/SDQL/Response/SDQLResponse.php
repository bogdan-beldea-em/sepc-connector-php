<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Response;

use OM\OddsMatrix\SEPC\Connector\SportsModel\InitialData;
use OM\OddsMatrix\SEPC\Connector\SportsModel\UpdateData;

/**
 * Class SDQLResponse
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Response
 */
class SDQLResponse
{
    /**
     * @var SDQLSubscribeResponse|null
     */
    private $_subscribeResponse;

    /**
     * @var SDQLUnsubscribeResponse|null
     */
    private $_unsubscribeResponse;

    /**
     * @var SDQLInitialDataResponse|null
     */
    private $_initialDataResponse;

    /**
     * @var InitialData|null
     */
    private $_initialData;

    /**
     * @var UpdateData[]|null
     */
    private $_dataUpdates;

    /**
     * @var SDQLUpdateDataResponse|null
     */
    private $_updateDataResponse;

    /**
     * @var SDQLError|null
     */
    private $_error;

    /**
     * @var SDQLPingRequest|null
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

        if (array_key_exists('InitialData', $array)) {
            $this->_initialData = InitialData::wrap($array['InitialData']);
        }

        else if (array_key_exists( 'UpdateData', $array)) {
            $updateData = UpdateData::wrap($array['UpdateData']);
            $this->_dataUpdates = [$updateData];
        }

        else if (array_key_exists('PingRequest', $array)) {
            $this->_pingRequest = SDQLPingRequest::wrap($array['PingRequest']);
        }

        else if (array_key_exists('error', $array)) {
            $this->_error = SDQLError::wrap($array['error']);
        }

        else if (array_key_exists('SubscribeResponse', $array)) {
            $this->_subscribeResponse = SDQLSubscribeResponse::wrap($array['SubscribeResponse']);
        }

        else if (array_key_exists('UnsubscribeResponse', $array)) {
            $this->_unsubscribeResponse = SDQLUnsubscribeResponse::wrap($array['UnsubscribeResponse']);
        }

        else if (array_key_exists('GetNextInitialDataResponse', $array)) {
            $this->_initialDataResponse = SDQLInitialDataResponse::wrap($array['GetNextInitialDataResponse']);
        }

        else if (array_key_exists('GetNextUpdateDataResponse', $array)) {
            $this->_updateDataResponse = SDQLUpdateDataResponse::wrap($array['GetNextUpdateDataResponse']);
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