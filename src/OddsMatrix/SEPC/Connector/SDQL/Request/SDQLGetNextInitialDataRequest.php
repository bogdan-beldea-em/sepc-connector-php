<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Request;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Annotation\QueryParam;
use RequestType;

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
     * @param string $subscriptionId
     * @return SDQLGetNextInitialDataRequest
     */
    public function setSubscriptionId(string $subscriptionId): SDQLGetNextInitialDataRequest
    {
        $this->_subscriptionId = $subscriptionId;
        return $this;
    }
}