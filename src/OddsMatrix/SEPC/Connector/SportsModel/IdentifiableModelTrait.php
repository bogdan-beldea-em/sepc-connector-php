<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Trait IdentifiableModelTrait
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
trait IdentifiableModelTrait
{
    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("id")
     * @Serializer\XmlAttribute()
     */
    private $_id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->_id;
    }
}