<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Request;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Annotation\RequestType;

/**
 * Class SDQLGetNextInitialDataRequest
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Request
 *
 * @RequestType(name="GetNextInitialDataRequest")
 * @Serializer\XmlRoot(name="GetNextInitialDataRequest")
 */
class SDQLGetNextInitialDataRequest
{
    use SubscriptionIdentifiableTrait;

    /**
     * SDQLGetNextInitialDataRequest constructor.
     * @param string $subscriptionId
     */
    public function __construct(string $subscriptionId)
    {
        $this->_subscriptionId = $subscriptionId;
    }
}