<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class EventInfo
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventInfo")
 */
class EventInfo implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait;

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
    * @Serializer\SerializedName("statusId")
    * @Serializer\XmlAttribute()
    */
    private $_statusId;

    /**
    * @var float|null
    *
    * @Serializer\Type("float")
    * @Serializer\SerializedName("paramFloat2")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat2;

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
    * @Serializer\SerializedName("eventPartId")
    * @Serializer\XmlAttribute()
    */
    private $_eventPartId;

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
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramScoringUnitId1")
    * @Serializer\XmlAttribute()
    */
    private $_paramScoringUnitId1;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramEventStatusId1")
    * @Serializer\XmlAttribute()
    */
    private $_paramEventStatusId1;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramEventPartId1")
    * @Serializer\XmlAttribute()
    */
    private $_paramEventPartId1;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramString1")
    * @Serializer\XmlAttribute()
    */
    private $_paramString1;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramBoolean1")
    * @Serializer\XmlAttribute()
    */
    private $_paramBoolean1;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("sourceId")
    * @Serializer\XmlAttribute()
    */
    private $_sourceId;

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
    public function getStatusId(): ?int
    {
        return $this->_statusId;
    }

    /**
     * @return float|null
     */
    public function getParamFloat2(): ?float
    {
        return $this->_paramFloat2;
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
    public function getParamScoringUnitId1(): ?int
    {
        return $this->_paramScoringUnitId1;
    }

    /**
     * @return int|null
     */
    public function getParamEventStatusId1(): ?int
    {
        return $this->_paramEventStatusId1;
    }

    /**
     * @return string|null
     */
    public function getParamEventPartId1(): ?string
    {
        return $this->_paramEventPartId1;
    }

    /**
     * @return string|null
     */
    public function getParamString1(): ?string
    {
        return $this->_paramString1;
    }

    /**
     * @return bool|null
     */
    public function isParamBoolean1(): ?bool
    {
        return $this->_paramBoolean1;
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
        return (new ToStringBuilder("EventInfo"))
            ->addProperty("paramEventPartId1", $this->_paramEventPartId1)
            ->addProperty("sourceId", $this->_sourceId)
            ->addProperty("paramFloat2", $this->_paramFloat2)
            ->addProperty("id", $this->_id)
            ->addProperty("paramFloat1", $this->_paramFloat1)
            ->addProperty("eventId", $this->_eventId)
            ->addProperty("paramParticipantId1", $this->_paramParticipantId1)
            ->addProperty("type", $this->_type)
            ->addProperty("paramBoolean1", $this->_paramBoolean1)
            ->addProperty("providerId", $this->_providerId)
            ->addProperty("version", $this->_version)
            ->addProperty("paramParticipantId2", $this->_paramParticipantId2)
            ->addProperty("statusId", $this->_statusId)
            ->addProperty("typeId", $this->_typeId)
            ->addProperty("eventPartId", $this->_eventPartId)
            ->addProperty("paramScoringUnitId1", $this->_paramScoringUnitId1)
            ->addProperty("paramString1", $this->_paramString1)
            ->addProperty("paramEventStatusId1", $this->_paramEventStatusId1)
            ;

    }
}
