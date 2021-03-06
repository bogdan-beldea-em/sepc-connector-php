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
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamFloat1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamFloat1;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamFloat2")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamFloat2;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamFloat3")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamFloat3;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamBoolean1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamBoolean1;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramBoolean1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramBoolean1Description;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamString1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamString1;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamParticipantId1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamParticipantId1;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipant1MustBePrimary")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant1MustBePrimary;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipant1MustBeRoot")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant1MustBeRoot;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamParticipantId2")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamParticipantId2;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipant2MustBePrimary")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant2MustBePrimary;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipant2MustBeRoot")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant2MustBeRoot;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipant2MustHaveRole")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant2MustHaveRole;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamParticipantId3")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamParticipantId3;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipant3MustBePrimary")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant3MustBePrimary;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipant3MustBeRoot")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant3MustBeRoot;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipant3MustHaveRole")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant3MustHaveRole;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamEventPartId1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamEventPartId1;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamScoringUnitId1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamScoringUnitId1;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramParticipantId1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId1Description;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipant1MustHaveRole")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant1MustHaveRole;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat1Description;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramString1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramString1Description;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramString1PossibleValues")
    * @Serializer\XmlAttribute()
    */
    private $_paramString1PossibleValues;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramParticipantId2Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId2Description;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat2Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat2Description;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat3Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat3Description;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramParticipantId3Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId3Description;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramParticipant1MustHaveRoleId")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipant1MustHaveRoleId;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramEventPartId1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramEventPartId1Description;

    /**
     * @return bool|null
     */
    public function isHasParamFloat1(): ?bool
    {
        return $this->_hasParamFloat1;
    }

    /**
     * @return bool|null
     */
    public function isHasParamFloat2(): ?bool
    {
        return $this->_hasParamFloat2;
    }

    /**
     * @return bool|null
     */
    public function isHasParamFloat3(): ?bool
    {
        return $this->_hasParamFloat3;
    }

    /**
     * @return bool|null
     */
    public function isHasParamBoolean1(): ?bool
    {
        return $this->_hasParamBoolean1;
    }

    /**
     * @return string|null
     */
    public function getParamBoolean1Description(): ?string
    {
        return $this->_paramBoolean1Description;
    }

    /**
     * @return bool|null
     */
    public function isHasParamString1(): ?bool
    {
        return $this->_hasParamString1;
    }

    /**
     * @return bool|null
     */
    public function isHasParamParticipantId1(): ?bool
    {
        return $this->_hasParamParticipantId1;
    }

    /**
     * @return bool|null
     */
    public function isParamParticipant1MustBePrimary(): ?bool
    {
        return $this->_paramParticipant1MustBePrimary;
    }

    /**
     * @return bool|null
     */
    public function isParamParticipant1MustBeRoot(): ?bool
    {
        return $this->_paramParticipant1MustBeRoot;
    }

    /**
     * @return bool|null
     */
    public function isHasParamParticipantId2(): ?bool
    {
        return $this->_hasParamParticipantId2;
    }

    /**
     * @return bool|null
     */
    public function isParamParticipant2MustBePrimary(): ?bool
    {
        return $this->_paramParticipant2MustBePrimary;
    }

    /**
     * @return bool|null
     */
    public function isParamParticipant2MustBeRoot(): ?bool
    {
        return $this->_paramParticipant2MustBeRoot;
    }

    /**
     * @return bool|null
     */
    public function isHasParamParticipantId3(): ?bool
    {
        return $this->_hasParamParticipantId3;
    }

    /**
     * @return bool|null
     */
    public function isParamParticipant3MustBePrimary(): ?bool
    {
        return $this->_paramParticipant3MustBePrimary;
    }

    /**
     * @return bool|null
     */
    public function isParamParticipant3MustBeRoot(): ?bool
    {
        return $this->_paramParticipant3MustBeRoot;
    }

    /**
     * @return bool|null
     */
    public function isHasParamEventPartId1(): ?bool
    {
        return $this->_hasParamEventPartId1;
    }

    /**
     * @return bool|null
     */
    public function isHasParamScoringUnitId1(): ?bool
    {
        return $this->_hasParamScoringUnitId1;
    }

    /**
     * @return string|null
     */
    public function getParamParticipantId1Description(): ?string
    {
        return $this->_paramParticipantId1Description;
    }

    /**
     * @return string|null
     */
    public function getParamFloat1Description(): ?string
    {
        return $this->_paramFloat1Description;
    }

    /**
     * @return string|null
     */
    public function getParamString1Description(): ?string
    {
        return $this->_paramString1Description;
    }

    /**
     * @return string|null
     */
    public function getParamString1PossibleValues(): ?string
    {
        return $this->_paramString1PossibleValues;
    }

    /**
     * @return string|null
     */
    public function getParamParticipantId2Description(): ?string
    {
        return $this->_paramParticipantId2Description;
    }

    /**
     * @return string|null
     */
    public function getParamFloat2Description(): ?string
    {
        return $this->_paramFloat2Description;
    }

    /**
     * @return string|null
     */
    public function getParamFloat3Description(): ?string
    {
        return $this->_paramFloat3Description;
    }

    /**
     * @return string|null
     */
    public function getParamParticipantId3Description(): ?string
    {
        return $this->_paramParticipantId3Description;
    }

    /**
     * @return int|null
     */
    public function getParamParticipant1MustHaveRoleId(): ?int
    {
        return $this->_paramParticipant1MustHaveRoleId;
    }

    /**
     * @return string|null
     */
    public function getParamEventPartId1Description(): ?string
    {
        return $this->_paramEventPartId1Description;
    }

    /**
     * @return bool|null
     */
    public function isParamParticipant1MustHaveRole(): ?bool
    {
        return $this->_paramParticipant1MustHaveRole;
    }

    /**
     * @return bool|null
     */
    public function isParamParticipant2MustHaveRole(): ?bool
    {
        return $this->_paramParticipant2MustHaveRole;
    }

    /**
     * @return bool|null
     */
    public function isParamParticipant3MustHaveRole(): ?bool
    {
        return $this->_paramParticipant3MustHaveRole;
    }
}
