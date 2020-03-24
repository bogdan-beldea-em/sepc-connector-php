<?php

namespace OM\OddsMatrix\SEPC\Connector\SDQL\Request;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Annotation\QueryParam;

/**
 * Class SDQLSubscribeRequest
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Request
 *
 * @\RequestType(name="subscribeRequest")
 * @Serializer\XmlRoot(name="SubscribeRequest")
 */
class SDQLSubscribeRequest
{
    /**
     * @var string
     * @Serializer\Type("string")
     * @Serializer\SerializedName("subscriptionSpecificationName")
     * @Serializer\XmlAttribute()
     * @QueryParam(name="subscriptionSpecificationName")
     */
    private $_subscriptionSpecificationName;

    /**
     * SDQLSubscribeRequest constructor.
     * @param string $_subscriptionSpecificationName
     */
    public function __construct(string $_subscriptionSpecificationName)
    {
        $this->_subscriptionSpecificationName = $_subscriptionSpecificationName;
    }

    /**
     * @return string
     */
    public function getSubscriptionSpecificationName(): String
    {
        return $this->_subscriptionSpecificationName;
    }
}