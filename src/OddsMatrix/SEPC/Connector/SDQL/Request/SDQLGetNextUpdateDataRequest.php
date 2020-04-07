<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Request;


use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Annotation\RequestType;

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
     * SDQLGetNextUpdateDataRequest constructor.
     * @param string $subscriptionId
     */
    public function __construct(string $subscriptionId)
    {
        $this->_subscriptionId = $subscriptionId;
    }
}