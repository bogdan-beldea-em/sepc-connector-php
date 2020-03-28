<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class EventActionDetailType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventActionDetailType")
 */
class EventActionDetailType
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
    * @Serializer\SerializedName("paramParticipantId1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId1Description;

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
    * @Serializer\SerializedName("paramString1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramString1Description;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramBoolean1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramBoolean1Description;

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
     * @return bool
     */
    public function isHasParamParticipantId1(): bool
    {
        return $this->_hasParamParticipantId1;
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
     * @return string
     */
    public function getParamString1PossibleValues(): string
    {
        return $this->_paramString1PossibleValues;
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
    public function getParamFloat2Description(): string
    {
        return $this->_paramFloat2Description;
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
    public function getParamBoolean1Description(): string
    {
        return $this->_paramBoolean1Description;
    }

}
