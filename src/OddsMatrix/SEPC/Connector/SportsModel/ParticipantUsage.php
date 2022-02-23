<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class ParticipantUsage
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="ParticipantUsage")
 */
class ParticipantUsage implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("participantId")
    * @Serializer\XmlAttribute()
    */
    private $_participantId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("sportId")
    * @Serializer\XmlAttribute()
    */
    private $_sportId;

    /**
     * @return int|null
     */
    public function getParticipantId(): ?int
    {
        return $this->_participantId;
    }

    /**
     * @return int|null
     */
    public function getSportId(): ?int
    {
        return $this->_sportId;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("ParticipantUsage"))
            ->addProperty("version", $this->_version)
            ->addProperty("participantId", $this->_participantId)
            ->addProperty("sportId", $this->_sportId)
            ->addProperty("id", $this->_id)
            ->addProperty("type", $this->_type)
            ;
    }
}
