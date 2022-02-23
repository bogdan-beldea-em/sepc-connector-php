<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class LocationType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="LocationType")
 */
class LocationType implements Stringable
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
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("codeDescription")
    * @Serializer\XmlAttribute()
    */
    private $_codeDescription;

    /**
     * @return bool|null
     */
    public function isHasCode(): ?bool
    {
        return $this->_hasCode;
    }

    /**
     * @return string|null
     */
    public function getCodeDescription(): ?string
    {
        return $this->_codeDescription;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("LocationType"))
            ->addProperty("hasCode", $this->_hasCode)
            ->addProperty("name", $this->_name)
            ->addProperty("id", $this->_id)
            ->addProperty("codeDescription", $this->_codeDescription)
            ->addProperty("version", $this->_version)
            ;
    }
}
