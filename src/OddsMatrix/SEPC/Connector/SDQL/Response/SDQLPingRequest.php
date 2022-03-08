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

    public function __construct(array $array = null)
    {
        if (is_null($array)) {
            return;
        }

        $this->_id = $array['id'];
    }

    public static function wrap($wrapped_obj): SDQLPingRequest
    {
        return new SDQLPingRequest($wrapped_obj);
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->_id;
    }
}