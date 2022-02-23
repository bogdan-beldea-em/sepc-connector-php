<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class ParticipantRole
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="ParticipantRole")
 */
class ParticipantRole implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isPrimary")
    * @Serializer\XmlAttribute()
    */
    private $_isPrimary;

    /**
     * @return bool|null
     */
    public function isPrimary(): ?bool
    {
        return $this->_isPrimary;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("ParticipantRole"))
            ->addProperty("isPrimary", $this->_isPrimary)
            ->addProperty("id", $this->_id)
            ->addProperty("version", $this->_version)
            ->addProperty("name", $this->_name)
            ->addProperty("description", $this->_description)
            ;
    }
}
