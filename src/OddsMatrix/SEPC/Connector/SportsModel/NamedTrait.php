<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Trait NamedTrait
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
trait NamedTrait
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("name")
     * @Serializer\XmlAttribute()
     */
    private $_name;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->_name;
    }
}