<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class EventInfo
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventInfo")
 */
class EventInfo
{
    use IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("typeId")
    * @Serializer\XmlAttribute()
    */
    private $_typeId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("eventId")
    * @Serializer\XmlAttribute()
    */
    private $_eventId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("providerId")
    * @Serializer\XmlAttribute()
    */
    private $_providerId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("statusId")
    * @Serializer\XmlAttribute()
    */
    private $_statusId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("eventPartId")
    * @Serializer\XmlAttribute()
    */
    private $_eventPartId;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat1")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat1;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat2")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat2;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramParticipantId1")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId1;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramParticipantId2")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId2;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramScoringUnitId1")
    * @Serializer\XmlAttribute()
    */
    private $_paramScoringUnitId1;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramEventStatusId1")
    * @Serializer\XmlAttribute()
    */
    private $_paramEventStatusId1;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramString1")
    * @Serializer\XmlAttribute()
    */
    private $_paramString1;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramEventPartId1")
    * @Serializer\XmlAttribute()
    */
    private $_paramEventPartId1;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramBoolean1")
    * @Serializer\XmlAttribute()
    */
    private $_paramBoolean1;

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->_typeId;
    }

    /**
     * @return int
     */
    public function getEventId(): int
    {
        return $this->_eventId;
    }

    /**
     * @return int
     */
    public function getProviderId(): int
    {
        return $this->_providerId;
    }

    /**
     * @return int
     */
    public function getStatusId(): int
    {
        return $this->_statusId;
    }

    /**
     * @return int
     */
    public function getEventPartId(): int
    {
        return $this->_eventPartId;
    }

    /**
     * @return string
     */
    public function getParamFloat1(): string
    {
        return $this->_paramFloat1;
    }

    /**
     * @return string
     */
    public function getParamFloat2(): string
    {
        return $this->_paramFloat2;
    }

    /**
     * @return int
     */
    public function getParamParticipantId1(): int
    {
        return $this->_paramParticipantId1;
    }

    /**
     * @return int
     */
    public function getParamParticipantId2(): int
    {
        return $this->_paramParticipantId2;
    }

    /**
     * @return int
     */
    public function getParamScoringUnitId1(): int
    {
        return $this->_paramScoringUnitId1;
    }

    /**
     * @return int
     */
    public function getParamEventStatusId1(): int
    {
        return $this->_paramEventStatusId1;
    }

    /**
     * @return string
     */
    public function getParamString1(): string
    {
        return $this->_paramString1;
    }

    /**
     * @return int
     */
    public function getParamEventPartId1(): int
    {
        return $this->_paramEventPartId1;
    }

    /**
     * @return bool
     */
    public function isParamBoolean1(): bool
    {
        return $this->_paramBoolean1;
    }

}
