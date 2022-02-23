<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class EventParticipantInfoDetailStatus
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventParticipantInfoDetailStatus")
 */
class EventParticipantInfoDetailStatus implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isAvailable")
    * @Serializer\XmlAttribute()
    */
    private $_isAvailable;

    /**
     * @return bool|null
     */
    public function isAvailable(): ?bool
    {
        return $this->_isAvailable;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("EventParticipantInfoDetailStatus"))
            ->addProperty("isAvailable", $this->_isAvailable)
            ->addProperty("id", $this->_id)
            ->addProperty("description", $this->_description)
            ->addProperty("version", $this->_version)
            ->addProperty("name", $this->_name)
            ;

    }
}
