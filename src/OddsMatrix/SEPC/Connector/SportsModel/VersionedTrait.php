<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Trait VersionedTrait
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
trait VersionedTrait
{
    /**
     * @var int|null
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("version")
     * @Serializer\XmlAttribute()
     */
    private $_version;

    /**
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->_version;
    }
}