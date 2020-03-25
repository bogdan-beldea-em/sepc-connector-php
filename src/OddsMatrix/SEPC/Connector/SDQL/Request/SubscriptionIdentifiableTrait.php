<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Request;


use OM\OddsMatrix\SEPC\Connector\Annotation\QueryParam;

trait SubscriptionIdentifiableTrait
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\XmlAttribute("subscriptionId")
     * @QueryParam(name="subscriptionId")
     */
    private $_subscriptionId;
}