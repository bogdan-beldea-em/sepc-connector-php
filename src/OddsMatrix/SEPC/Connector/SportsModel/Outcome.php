<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class Outcome
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Outcome")
 */
class Outcome implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("typeId")
    * @Serializer\XmlAttribute()
    */
    private $_typeId;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isNegation")
    * @Serializer\XmlAttribute()
    */
    private $_isNegation;

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
    * @var string|null
    *
    * @Serializer\Type("string")
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
    * @Serializer\SerializedName("paramScoringUnitId1")
    * @Serializer\XmlAttribute()
    */
    private $_paramScoringUnitId1;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("code")
    * @Serializer\XmlAttribute()
    */
    private $_code;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("settlementRequired")
    * @Serializer\XmlAttribute()
    */
    private $_settlementRequired;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramBoolean1")
    * @Serializer\XmlAttribute()
    */
    private $_paramBoolean1;

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
    * @Serializer\SerializedName("paramParticipantId2")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId2;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat3")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat3;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramParticipantId3")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId3;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramString1")
    * @Serializer\XmlAttribute()
    */
    private $_paramString1;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramEventPartId1")
    * @Serializer\XmlAttribute()
    */
    private $_paramEventPartId1;

    /**
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->_typeId;
    }

    /**
     * @return bool|null
     */
    public function isNegation(): ?bool
    {
        return $this->_isNegation;
    }

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
     * @return string|null
     */
    public function getParamFloat1(): ?string
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
    public function getParamScoringUnitId1(): ?int
    {
        return $this->_paramScoringUnitId1;
    }

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->_code;
    }

    /**
     * @return bool|null
     */
    public function isSettlementRequired(): ?bool
    {
        return $this->_settlementRequired;
    }

    /**
     * @return bool|null
     */
    public function isParamBoolean1(): ?bool
    {
        return $this->_paramBoolean1;
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
    public function getParamParticipantId2(): ?int
    {
        return $this->_paramParticipantId2;
    }

    /**
     * @return string|null
     */
    public function getParamFloat3(): ?string
    {
        return $this->_paramFloat3;
    }

    /**
     * @return int|null
     */
    public function getParamParticipantId3(): ?int
    {
        return $this->_paramParticipantId3;
    }

    /**
     * @return string|null
     */
    public function getParamString1(): ?string
    {
        return $this->_paramString1;
    }

    /**
     * @return int|null
     */
    public function getParamEventPartId1(): ?int
    {
        return $this->_paramEventPartId1;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("Outcome"))
            ->addProperty("version", $this->_version)
            ->addProperty("paramFloat1", $this->_paramFloat1)
            ->addProperty("typeId", $this->_typeId)
            ->addProperty("eventPartId", $this->_eventPartId)
            ->addProperty("paramString1", $this->_paramString1)
            ->addProperty("code", $this->_code)
            ->addProperty("paramScoringUnitId1", $this->_paramScoringUnitId1)
            ->addProperty("statusId", $this->_statusId)
            ->addProperty("isNegation", $this->_isNegation)
            ->addProperty("eventId", $this->_eventId)
            ->addProperty("paramParticipantId1", $this->_paramParticipantId1)
            ->addProperty("settlementRequired", $this->_settlementRequired)
            ->addProperty("paramEventPartId1", $this->_paramEventPartId1)
            ->addProperty("paramFloat3", $this->_paramFloat3)
            ->addProperty("paramBoolean1", $this->_paramBoolean1)
            ->addProperty("id", $this->_id)
            ->addProperty("paramParticipantId3", $this->_paramParticipantId3)
            ->addProperty("name", $this->_name)
            ->addProperty("paramParticipantId2", $this->_paramParticipantId2)
            ->addProperty("paramFloat2", $this->_paramFloat2)
            ->addProperty("type", $this->_type)
            ;
    }
}
