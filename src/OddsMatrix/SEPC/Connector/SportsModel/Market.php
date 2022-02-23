<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class Market
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Market")
 */
class Market implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait, NamedTrait;

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
    * @Serializer\SerializedName("bettingTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_bettingTypeId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("scoringUnitId")
    * @Serializer\XmlAttribute()
    */
    private $_scoringUnitId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("numberOfOutcomes")
    * @Serializer\XmlAttribute()
    */
    private $_numberOfOutcomes;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isComplete")
    * @Serializer\XmlAttribute()
    */
    private $_isComplete;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isClosed")
    * @Serializer\XmlAttribute()
    */
    private $_isClosed;

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
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("discriminator")
    * @Serializer\XmlAttribute()
    */
    private $_discriminator;

    /**
    * @var float|null
    *
    * @Serializer\Type("float")
    * @Serializer\SerializedName("paramFloat2")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat2;

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
    * @Serializer\SerializedName("paramParticipantId2")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId2;

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
    public function getBettingTypeId(): ?int
    {
        return $this->_bettingTypeId;
    }

    /**
     * @return int|null
     */
    public function getScoringUnitId(): ?int
    {
        return $this->_scoringUnitId;
    }

    /**
     * @return int|null
     */
    public function getNumberOfOutcomes(): ?int
    {
        return $this->_numberOfOutcomes;
    }

    /**
     * @return bool|null
     */
    public function isComplete(): ?bool
    {
        return $this->_isComplete;
    }

    /**
     * @return bool|null
     */
    public function isClosed(): ?bool
    {
        return $this->_isClosed;
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
     * @return string|null
     */
    public function getDiscriminator(): ?string
    {
        return $this->_discriminator;
    }

    /**
     * @return float|null
     */
    public function getParamFloat2(): ?float
    {
        return $this->_paramFloat2;
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
    public function getParamParticipantId2(): ?int
    {
        return $this->_paramParticipantId2;
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
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("Market"))
            ->addProperty("eventId", $this->_eventId)
            ->addProperty("version", $this->_version)
            ->addProperty("paramParticipantId1", $this->_paramParticipantId1)
            ->addProperty("numberOfOutcomes", $this->_numberOfOutcomes)
            ->addProperty("paramString1", $this->_paramString1)
            ->addProperty("paramParticipantId3", $this->_paramParticipantId3)
            ->addProperty("discriminator", $this->_discriminator)
            ->addProperty("name", $this->_name)
            ->addProperty("eventPartId", $this->_eventPartId)
            ->addProperty("paramFloat1", $this->_paramFloat1)
            ->addProperty("id", $this->_id)
            ->addProperty("scoringUnitId", $this->_scoringUnitId)
            ->addProperty("type", $this->_type)
            ->addProperty("isClosed", $this->_isClosed)
            ->addProperty("bettingTypeId", $this->_bettingTypeId)
            ->addProperty("paramParticipantId2", $this->_paramParticipantId2)
            ->addProperty("paramFloat3", $this->_paramFloat3)
            ->addProperty("paramFloat2", $this->_paramFloat2)
            ->addProperty("isComplete", $this->_isComplete)
            ;
    }
}
