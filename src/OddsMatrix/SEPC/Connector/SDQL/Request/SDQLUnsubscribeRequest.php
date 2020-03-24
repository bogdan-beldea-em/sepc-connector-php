<?php

namespace OM\OddsMatrix\SEPC\Connector\SDQL\Request;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Annotation\QueryParam;

/**
 * Class SDQLUnsubscribeRequest
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Request
 *
 * @RequestType(name="UnsubscribeRequest")
 * @Serializer\XmlRoot(name="UnsubscribeRequest")
 */
class SDQLUnsubscribeRequest {

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("subscriptionSpecificationName")
     * @Serializer\XmlAttribute()
     * @QueryParam("subscriptionSpecificationName")
     */
    private $_subscriptionSpecificationName;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("subscriptionId")
     * @Serializer\XmlAttribute()
     * @QueryParam("subscriptionId")
     */
    private $_subscriptionId;

    /**
     * SDQLUnsubscribeRequest constructor.
     * @param string $_subscriptionSpecificationName
     * @param string $_subscriptionId
     */
    public function __construct(string $_subscriptionSpecificationName, string $_subscriptionId)
    {
        $this->_subscriptionSpecificationName = $_subscriptionSpecificationName;
        $this->_subscriptionId = $_subscriptionId;
    }
}