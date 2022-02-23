<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class EventActionDetailType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventActionDetailType")
 */
class EventActionDetailType implements Stringable
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
    * @Serializer\SerializedName("paramParticipantId1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId1Description;

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
    * @Serializer\SerializedName("paramString1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramString1Description;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramBoolean1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramBoolean1Description;

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
     * @return bool|null
     */
    public function isHasParamParticipantId1(): ?bool
    {
        return $this->_hasParamParticipantId1;
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
     * @return string|null
     */
    public function getParamString1PossibleValues(): ?string
    {
        return $this->_paramString1PossibleValues;
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
    public function getParamFloat2Description(): ?string
    {
        return $this->_paramFloat2Description;
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
    public function getParamBoolean1Description(): ?string
    {
        return $this->_paramBoolean1Description;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("EventActionDetailType"))
            ->addProperty("description", $this->_description)
            ->addProperty("paramParticipantId1Description", $this->_paramParticipantId1Description)
            ->addProperty("paramFloat2Description", $this->_paramFloat2Description)
            ->addProperty("hasParamParticipantId1", $this->_hasParamParticipantId1)
            ->addProperty("hasParamString1", $this->_hasParamString1)
            ->addProperty("paramFloat1Description", $this->_paramFloat1Description)
            ->addProperty("hasParamFloat1", $this->_hasParamFloat1)
            ->addProperty("version", $this->_version)
            ->addProperty("paramString1PossibleValues", $this->_paramString1PossibleValues)
            ->addProperty("paramString1Description", $this->_paramString1Description)
            ->addProperty("name", $this->_name)
            ->addProperty("paramBoolean1Description", $this->_paramBoolean1Description)
            ->addProperty("hasParamBoolean1", $this->_hasParamBoolean1)
            ->addProperty("id", $this->_id)
            ->addProperty("hasParamFloat2", $this->_hasParamFloat2)
            ;
    }
}
