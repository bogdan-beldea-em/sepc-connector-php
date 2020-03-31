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
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasCode")
    * @Serializer\XmlAttribute()
    */
    private $_hasCode;

    /**
     * @return bool|null
     */
    public function isHasCode(): ?bool
    {
        return $this->_hasCode;
    }

}
