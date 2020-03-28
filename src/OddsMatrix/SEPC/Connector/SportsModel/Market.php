<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Market
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Market")
 */
class Market
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

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
    * @Serializer\SerializedName("eventPartId")
    * @Serializer\XmlAttribute()
    */
    private $_eventPartId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("bettingTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_bettingTypeId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("scoringUnitId")
    * @Serializer\XmlAttribute()
    */
    private $_scoringUnitId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("numberOfOutcomes")
    * @Serializer\XmlAttribute()
    */
    private $_numberOfOutcomes;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isComplete")
    * @Serializer\XmlAttribute()
    */
    private $_isComplete;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isClosed")
    * @Serializer\XmlAttribute()
    */
    private $_isClosed;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat1")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat1;

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
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat2")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat2;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat3")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat3;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("discriminator")
    * @Serializer\XmlAttribute()
    */
    private $_discriminator;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramParticipantId3")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId3;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramString1")
    * @Serializer\XmlAttribute()
    */
    private $_paramString1;

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
    public function getEventPartId(): int
    {
        return $this->_eventPartId;
    }

    /**
     * @return int
     */
    public function getBettingTypeId(): int
    {
        return $this->_bettingTypeId;
    }

    /**
     * @return int
     */
    public function getScoringUnitId(): int
    {
        return $this->_scoringUnitId;
    }

    /**
     * @return int
     */
    public function getNumberOfOutcomes(): int
    {
        return $this->_numberOfOutcomes;
    }

    /**
     * @return bool
     */
    public function isComplete(): bool
    {
        return $this->_isComplete;
    }

    /**
     * @return bool
     */
    public function isClosed(): bool
    {
        return $this->_isClosed;
    }

    /**
     * @return string
     */
    public function getParamFloat1(): string
    {
        return $this->_paramFloat1;
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
     * @return string
     */
    public function getParamFloat2(): string
    {
        return $this->_paramFloat2;
    }

    /**
     * @return string
     */
    public function getParamFloat3(): string
    {
        return $this->_paramFloat3;
    }

    /**
     * @return string
     */
    public function getDiscriminator(): string
    {
        return $this->_discriminator;
    }

    /**
     * @return int
     */
    public function getParamParticipantId3(): int
    {
        return $this->_paramParticipantId3;
    }

    /**
     * @return string
     */
    public function getParamString1(): string
    {
        return $this->_paramString1;
    }

}
