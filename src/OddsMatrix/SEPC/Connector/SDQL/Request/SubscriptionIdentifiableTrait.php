<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Request;


use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Annotation\QueryParam;

trait SubscriptionIdentifiableTrait
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("subscriptionId")
     * @Serializer\XmlAttribute()
     * @QueryParam(name="subscriptionId")
     */
    private $_subscriptionId;
}