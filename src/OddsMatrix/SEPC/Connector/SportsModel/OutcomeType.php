<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class OutcomeType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="OutcomeType")
 */
class OutcomeType
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
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamFloat2")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamFloat2;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamFloat3")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamFloat3;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamBoolean1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamBoolean1;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramBoolean1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramBoolean1Description;

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
    * @Serializer\SerializedName("hasParamParticipantId1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamParticipantId1;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipant1MustBePrimary")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant1MustBePrimary;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipant1MustBeRoot")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant1MustBeRoot;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamParticipantId2")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamParticipantId2;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipant2MustBePrimary")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant2MustBePrimary;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipant2MustBeRoot")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant2MustBeRoot;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamParticipantId3")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamParticipantId3;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipant3MustBePrimary")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant3MustBePrimary;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipant3MustBeRoot")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant3MustBeRoot;

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
    * @Serializer\SerializedName("hasParamScoringUnitId1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamScoringUnitId1;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramParticipantId1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId1Description;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat1Description;

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
    * @Serializer\SerializedName("paramParticipantId2Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId2Description;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat2Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat2Description;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat3Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat3Description;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramParticipantId3Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId3Description;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramParticipant1MustHaveRoleId")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant1MustHaveRoleId;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramEventPartId1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramEventPartId1Description;

    /**
     * @return bool
     */
    public function isHasParamFloat1(): bool
    {
        return $this->_hasParamFloat1;
    }

    /**
     * @return bool
     */
    public function isHasParamFloat2(): bool
    {
        return $this->_hasParamFloat2;
    }

    /**
     * @return bool
     */
    public function isHasParamFloat3(): bool
    {
        return $this->_hasParamFloat3;
    }

    /**
     * @return bool
     */
    public function isHasParamBoolean1(): bool
    {
        return $this->_hasParamBoolean1;
    }

    /**
     * @return string
     */
    public function getParamBoolean1Description(): string
    {
        return $this->_paramBoolean1Description;
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
    public function isHasParamParticipantId1(): bool
    {
        return $this->_hasParamParticipantId1;
    }

    /**
     * @return bool
     */
    public function isParamParticipant1MustBePrimary(): bool
    {
        return $this->_paramParticipant1MustBePrimary;
    }

    /**
     * @return bool
     */
    public function isParamParticipant1MustBeRoot(): bool
    {
        return $this->_paramParticipant1MustBeRoot;
    }

    /**
     * @return bool
     */
    public function isHasParamParticipantId2(): bool
    {
        return $this->_hasParamParticipantId2;
    }

    /**
     * @return bool
     */
    public function isParamParticipant2MustBePrimary(): bool
    {
        return $this->_paramParticipant2MustBePrimary;
    }

    /**
     * @return bool
     */
    public function isParamParticipant2MustBeRoot(): bool
    {
        return $this->_paramParticipant2MustBeRoot;
    }

    /**
     * @return bool
     */
    public function isHasParamParticipantId3(): bool
    {
        return $this->_hasParamParticipantId3;
    }

    /**
     * @return bool
     */
    public function isParamParticipant3MustBePrimary(): bool
    {
        return $this->_paramParticipant3MustBePrimary;
    }

    /**
     * @return bool
     */
    public function isParamParticipant3MustBeRoot(): bool
    {
        return $this->_paramParticipant3MustBeRoot;
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
    public function isHasParamScoringUnitId1(): bool
    {
        return $this->_hasParamScoringUnitId1;
    }

    /**
     * @return string
     */
    public function getParamParticipantId1Description(): string
    {
        return $this->_paramParticipantId1Description;
    }

    /**
     * @return string
     */
    public function getParamFloat1Description(): string
    {
        return $this->_paramFloat1Description;
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
    public function getParamParticipantId2Description(): string
    {
        return $this->_paramParticipantId2Description;
    }

    /**
     * @return string
     */
    public function getParamFloat2Description(): string
    {
        return $this->_paramFloat2Description;
    }

    /**
     * @return string
     */
    public function getParamFloat3Description(): string
    {
        return $this->_paramFloat3Description;
    }

    /**
     * @return string
     */
    public function getParamParticipantId3Description(): string
    {
        return $this->_paramParticipantId3Description;
    }

    /**
     * @return int
     */
    public function getParamParticipant1MustHaveRoleId(): int
    {
        return $this->_paramParticipant1MustHaveRoleId;
    }

    /**
     * @return string
     */
    public function getParamEventPartId1Description(): string
    {
        return $this->_paramEventPartId1Description;
    }

}
