<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Response;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SDQLResponse
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Response
 *
 * @Serializer\XmlRoot(name="sdql")
 */
class SDQLResponse
{
    /**
     * @var SDQLSubscribeResponse
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLSubscribeResponse")
     * @Serializer\SerializedName("SubscribeResponse")
     */
    private $_subscribeResponse;

    /**
     * @var SDQLUnsubscribeResponse
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLUnsubscribeResponse")
     * @Serializer\SerializedName("UnsubscribeResponse")
     */
    private $_unsubscribeResponse;

    /**
     * @var SDQLError
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLError")
     * @Serializer\SerializedName("error")
     */
    private $_error;

    /**
     * @return SDQLSubscribeResponse
     */
    public function getSubscribeResponse(): SDQLSubscribeResponse
    {
        return $this->_subscribeResponse;
    }

    /**
     * @return SDQLUnsubscribeResponse
     */
    public function getUnsubscribeResponse(): SDQLUnsubscribeResponse
    {
        return $this->_unsubscribeResponse;
    }

    /**
     * @return SDQLError
     */
    public function getError(): SDQLError
    {
        return $this->_error;
    }
}