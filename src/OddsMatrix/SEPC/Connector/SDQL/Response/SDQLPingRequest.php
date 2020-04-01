<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Response;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SDQLPingRequest
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Response
 *
 * @Serializer\XmlRoot(name="PingRequest")
 */
class SDQLPingRequest
{
    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("id")
    * @Serializer\XmlAttribute()
    */
    private $_id;

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->_id;
    }
}