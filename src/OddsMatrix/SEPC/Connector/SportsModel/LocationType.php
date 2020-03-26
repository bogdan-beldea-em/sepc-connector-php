<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class LocationType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="LocationType")
 */
class LocationType
{
    use IdentifiableModelTrait, NamedTrait, VersionedTrait;

    /**
     * @var bool
     *
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("hasCode")
     * @Serializer\XmlAttribute()
     */
    private $_hasCode;

    /**
     * @return bool
     */
    public function isHasCode(): bool
    {
        return $this->_hasCode;
    }
}