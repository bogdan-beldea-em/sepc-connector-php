<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class EventInfoType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventInfoType")
 */
class EventInfoType implements Stringable
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
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat1Description;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamFloat2")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamFloat2;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat2Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat2Description;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamParticipantId1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamParticipantId1;

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
    * @Serializer\SerializedName("hasParamParticipantId2")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamParticipantId2;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramParticipantId2Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId2Description;

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
    * @Serializer\SerializedName("hasParamString1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamString1;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamBoolean1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamBoolean1;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamEventStatusId1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamEventStatusId1;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamTime1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamTime1;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramParticipantIdsMustBeOrdered")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantIdsMustBeOrdered;

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
    * @Serializer\SerializedName("paramScoringUnitId1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramScoringUnitId1Description;

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
    * @Serializer\SerializedName("paramBoolean1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramBoolean1Description;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramEventPartId1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramEventPartId1Description;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramEventStatusId1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramEventStatusId1Description;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramTime1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramTime1Description;

    /**
     * @return bool|null
     */
    public function isHasParamFloat1(): ?bool
    {
        return $this->_hasParamFloat1;
    }

    /**
     * @return string|null
     */
    public function getParamFloat1Description(): ?string
    {
        return $this->_paramFloat1Description;
    }

    /**
     * @return bool|null
     */
    public function isHasParamFloat2(): ?bool
    {
        return $this->_hasParamFloat2;
    }

    /**
     * @return string|null
     */
    public function getParamFloat2Description(): ?string
    {
        return $this->_paramFloat2Description;
    }

    /**
     * @return bool|null
     */
    public function isHasParamParticipantId1(): ?bool
    {
        return $this->_hasParamParticipantId1;
    }

    /**
     * @return string|null
     */
    public function getParamParticipantId1Description(): ?string
    {
        return $this->_paramParticipantId1Description;
    }

    /**
     * @return bool|null
     */
    public function isHasParamParticipantId2(): ?bool
    {
        return $this->_hasParamParticipantId2;
    }

    /**
     * @return string|null
     */
    public function getParamParticipantId2Description(): ?string
    {
        return $this->_paramParticipantId2Description;
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
    public function isHasParamString1(): ?bool
    {
        return $this->_hasParamString1;
    }

    /**
     * @return bool|null
     */
    public function isHasParamBoolean1(): ?bool
    {
        return $this->_hasParamBoolean1;
    }

    /**
     * @return bool|null
     */
    public function isHasParamEventStatusId1(): ?bool
    {
        return $this->_hasParamEventStatusId1;
    }

    /**
     * @return bool|null
     */
    public function isHasParamTime1(): ?bool
    {
        return $this->_hasParamTime1;
    }

    /**
     * @return bool|null
     */
    public function isParamParticipantIdsMustBeOrdered(): ?bool
    {
        return $this->_paramParticipantIdsMustBeOrdered;
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
    public function getParamBoolean1Description(): ?string
    {
        return $this->_paramBoolean1Description;
    }

    /**
     * @return string|null
     */
    public function getParamEventPartId1Description(): ?string
    {
        return $this->_paramEventPartId1Description;
    }

    /**
     * @return string|null
     */
    public function getParamEventStatusId1Description(): ?string
    {
        return $this->_paramEventStatusId1Description;
    }

    /**
     * @return string|null
     */
    public function getParamTime1Description(): ?string
    {
        return $this->_paramTime1Description;
    }

    /**
     * @return string|null
     */
    public function getParamScoringUnitId1Description(): ?string
    {
        return $this->_paramScoringUnitId1Description;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("EventInfoType"))
            ->addProperty("hasParamEventPartId1", $this->_hasParamEventPartId1)
            ->addProperty("paramEventStatusId1Description", $this->_paramEventStatusId1Description)
            ->addProperty("paramParticipantId1Description", $this->_paramParticipantId1Description)
            ->addProperty("paramString1Description", $this->_paramString1Description)
            ->addProperty("version", $this->_version)
            ->addProperty("paramString1PossibleValues", $this->_paramString1PossibleValues)
            ->addProperty("hasParamEventStatusId1", $this->_hasParamEventStatusId1)
            ->addProperty("description", $this->_description)
            ->addProperty("paramEventPartId1Description", $this->_paramEventPartId1Description)
            ->addProperty("paramFloat1Description", $this->_paramFloat1Description)
            ->addProperty("hasParamString1", $this->_hasParamString1)
            ->addProperty("paramTime1Description", $this->_paramTime1Description)
            ->addProperty("hasParamTime1", $this->_hasParamTime1)
            ->addProperty("id", $this->_id)
            ->addProperty("hasParamParticipantId2", $this->_hasParamParticipantId2)
            ->addProperty("hasParamFloat1", $this->_hasParamFloat1)
            ->addProperty("paramBoolean1Description", $this->_paramBoolean1Description)
            ->addProperty("hasParamFloat2", $this->_hasParamFloat2)
            ->addProperty("paramParticipantId2Description", $this->_paramParticipantId2Description)
            ->addProperty("paramParticipantIdsMustBeOrdered", $this->_paramParticipantIdsMustBeOrdered)
            ->addProperty("paramFloat2Description", $this->_paramFloat2Description)
            ->addProperty("hasParamScoringUnitId1", $this->_hasParamScoringUnitId1)
            ->addProperty("hasParamParticipantId1", $this->_hasParamParticipantId1)
            ->addProperty("hasParamBoolean1", $this->_hasParamBoolean1)
            ->addProperty("paramScoringUnitId1Description", $this->_paramScoringUnitId1Description)
            ->addProperty("name", $this->_name)
            ;

    }
}
