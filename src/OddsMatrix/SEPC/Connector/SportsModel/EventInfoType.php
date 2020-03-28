<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class EventInfoType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventInfoType")
 */
class EventInfoType
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamFloat1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamFloat1;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat1Description;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamFloat2")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamFloat2;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat2Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat2Description;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamParticipantId1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamParticipantId1;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramParticipantId1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId1Description;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamParticipantId2")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamParticipantId2;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramParticipantId2Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId2Description;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamEventPartId1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamEventPartId1;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamString1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamString1;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamBoolean1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamBoolean1;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamEventStatusId1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamEventStatusId1;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamTime1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamTime1;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipantIdsMustBeOrdered")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantIdsMustBeOrdered;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamScoringUnitId1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamScoringUnitId1;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramString1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramString1Description;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramString1PossibleValues")
    * @Serializer\XmlAttribute()
    */
    private $_paramString1PossibleValues;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramBoolean1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramBoolean1Description;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramEventPartId1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramEventPartId1Description;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramEventStatusId1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramEventStatusId1Description;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramTime1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramTime1Description;

    /**
     * @return bool
     */
    public function isHasParamFloat1(): bool
    {
        return $this->_hasParamFloat1;
    }

    /**
     * @return string
     */
    public function getParamFloat1Description(): string
    {
        return $this->_paramFloat1Description;
    }

    /**
     * @return bool
     */
    public function isHasParamFloat2(): bool
    {
        return $this->_hasParamFloat2;
    }

    /**
     * @return string
     */
    public function getParamFloat2Description(): string
    {
        return $this->_paramFloat2Description;
    }

    /**
     * @return bool
     */
    public function isHasParamParticipantId1(): bool
    {
        return $this->_hasParamParticipantId1;
    }

    /**
     * @return string
     */
    public function getParamParticipantId1Description(): string
    {
        return $this->_paramParticipantId1Description;
    }

    /**
     * @return bool
     */
    public function isHasParamParticipantId2(): bool
    {
        return $this->_hasParamParticipantId2;
    }

    /**
     * @return string
     */
    public function getParamParticipantId2Description(): string
    {
        return $this->_paramParticipantId2Description;
    }

    /**
     * @return bool
     */
    public function isHasParamEventPartId1(): bool
    {
        return $this->_hasParamEventPartId1;
    }

    /**
     * @return bool
     */
    public function isHasParamString1(): bool
    {
        return $this->_hasParamString1;
    }

    /**
     * @return bool
     */
    public function isHasParamBoolean1(): bool
    {
        return $this->_hasParamBoolean1;
    }

    /**
     * @return bool
     */
    public function isHasParamEventStatusId1(): bool
    {
        return $this->_hasParamEventStatusId1;
    }

    /**
     * @return bool
     */
    public function isHasParamTime1(): bool
    {
        return $this->_hasParamTime1;
    }

    /**
     * @return bool
     */
    public function isParamParticipantIdsMustBeOrdered(): bool
    {
        return $this->_paramParticipantIdsMustBeOrdered;
    }

    /**
     * @return bool
     */
    public function isHasParamScoringUnitId1(): bool
    {
        return $this->_hasParamScoringUnitId1;
    }

    /**
     * @return string
     */
    public function getParamString1Description(): string
    {
        return $this->_paramString1Description;
    }

    /**
     * @return string
     */
    public function getParamString1PossibleValues(): string
    {
        return $this->_paramString1PossibleValues;
    }

    /**
     * @return string
     */
    public function getParamBoolean1Description(): string
    {
        return $this->_paramBoolean1Description;
    }

    /**
     * @return string
     */
    public function getParamEventPartId1Description(): string
    {
        return $this->_paramEventPartId1Description;
    }

    /**
     * @return string
     */
    public function getParamEventStatusId1Description(): string
    {
        return $this->_paramEventStatusId1Description;
    }

    /**
     * @return string
     */
    public function getParamTime1Description(): string
    {
        return $this->_paramTime1Description;
    }

}
