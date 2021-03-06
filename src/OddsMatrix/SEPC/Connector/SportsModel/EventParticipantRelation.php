<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class EventParticipantRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventParticipantRelation")
 */
class EventParticipantRelation
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("eventId")
    * @Serializer\XmlAttribute()
    */
    private $_eventId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("eventPartId")
    * @Serializer\XmlAttribute()
    */
    private $_eventPartId;

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
    * @Serializer\SerializedName("participantRoleId")
    * @Serializer\XmlAttribute()
    */
    private $_participantRoleId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("parentParticipantId")
    * @Serializer\XmlAttribute()
    */
    private $_parentParticipantId;

    /**
     * @return int|null
     */
    public function getEventId(): ?int
    {
        return $this->_eventId;
    }

    /**
     * @return int|null
     */
    public function getEventPartId(): ?int
    {
        return $this->_eventPartId;
    }

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
    public function getParticipantRoleId(): ?int
    {
        return $this->_participantRoleId;
    }

    /**
     * @return int|null
     */
    public function getParentParticipantId(): ?int
    {
        return $this->_parentParticipantId;
    }

}
