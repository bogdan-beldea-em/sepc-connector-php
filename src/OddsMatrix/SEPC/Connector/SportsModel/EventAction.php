<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class EventAction
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventAction")
 */
class EventAction implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("statusId")
    * @Serializer\XmlAttribute()
    */
    private $_statusId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("typeId")
    * @Serializer\XmlAttribute()
    */
    private $_typeId;

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
    * @Serializer\SerializedName("providerId")
    * @Serializer\XmlAttribute()
    */
    private $_providerId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("sourceId")
    * @Serializer\XmlAttribute()
    */
    private $_sourceId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("eventPartId")
    * @Serializer\XmlAttribute()
    */
    private $_eventPartId;

    /**
    * @var float|null
    *
    * @Serializer\Type("float")
    * @Serializer\SerializedName("paramFloat1")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat1;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramParticipantId1")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId1;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramParticipantId2")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId2;

    /**
     * @return int|null
     */
    public function getStatusId(): ?int
    {
        return $this->_statusId;
    }

    /**
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->_typeId;
    }

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
    public function getProviderId(): ?int
    {
        return $this->_providerId;
    }

    /**
     * @return int|null
     */
    public function getEventPartId(): ?int
    {
        return $this->_eventPartId;
    }

    /**
     * @return float|null
     */
    public function getParamFloat1(): ?float
    {
        return $this->_paramFloat1;
    }

    /**
     * @return int|null
     */
    public function getParamParticipantId1(): ?int
    {
        return $this->_paramParticipantId1;
    }

    /**
     * @return int|null
     */
    public function getParamParticipantId2(): ?int
    {
        return $this->_paramParticipantId2;
    }

    /**
     * @return int|null
     */
    public function getSourceId(): ?int
    {
        return $this->_sourceId;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("EventAction"))
            ->addProperty("sourceId", $this->_sourceId)
            ->addProperty("paramParticipantId2", $this->_paramParticipantId2)
            ->addProperty("paramFloat1", $this->_paramFloat1)
            ->addProperty("version", $this->_version)
            ->addProperty("typeId", $this->_typeId)
            ->addProperty("providerId", $this->_providerId)
            ->addProperty("eventPartId", $this->_eventPartId)
            ->addProperty("eventId", $this->_eventId)
            ->addProperty("id", $this->_id)
            ->addProperty("paramParticipantId1", $this->_paramParticipantId1)
            ->addProperty("statusId", $this->_statusId)
            ->addProperty("type", $this->_type)
            ;
    }
}
