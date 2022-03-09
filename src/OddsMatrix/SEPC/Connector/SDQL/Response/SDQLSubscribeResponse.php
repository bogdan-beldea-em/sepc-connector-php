<?php

namespace OM\OddsMatrix\SEPC\Connector\SDQL\Response;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SDQLSubscribeResponse
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Response
 */
class SDQLSubscribeResponse
{
    /**
     * @var string
     */
    private $_subscriptionId;

    /**
     * @var string
     */
    private $_subscriptionChecksum;

    /**
     * @param array|null $array
     */
    public function __construct(array $array = null)
    {
        if (is_null($array)) {
            return;
        }

        $this->_subscriptionId = $array['subscriptionId'];
        $this->_subscriptionChecksum = $array['subscriptionChecksum'];
    }

    /**
     * @param array $wrapped_obj
     * @return SDQLSubscribeResponse
     */
    public static function wrap(array $wrapped_obj): SDQLSubscribeResponse
    {
        return new SDQLSubscribeResponse($wrapped_obj);
    }

    /**
     * @return string
     */
    public function getSubscriptionId(): string
    {
        return $this->_subscriptionId;
    }

    /**
     * @return string
     */
    public function getSubscriptionChecksum(): string
    {
        return $this->_subscriptionChecksum;
    }
}