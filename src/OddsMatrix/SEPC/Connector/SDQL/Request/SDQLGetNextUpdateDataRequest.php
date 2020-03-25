<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Request;


use JMS\Serializer\Annotation as Serializer;
use RequestType;

/**
 * Class SDQLGetNextUpdateDataRequest
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Request
 *
 * @Serializer\XmlRoot(name="GetNextUpdateDataRequest")
 * @RequestType(name="GetNextUpdateDataRequest")
 */
class SDQLGetNextUpdateDataRequest
{
    use SubscriptionIdentifiableTrait;

    /**
     * @param string $subscriptionId
     * @return SDQLGetNextUpdateDataRequest
     */
    public function setSubscriptionId(string $subscriptionId): SDQLGetNextUpdateDataRequest
    {
        $this->_subscriptionId = $subscriptionId;
        return $this;
    }
}