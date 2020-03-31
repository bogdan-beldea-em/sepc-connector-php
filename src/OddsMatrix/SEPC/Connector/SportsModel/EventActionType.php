<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class EventActionType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventActionType")
 */
class EventActionType
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
    * @Serializer\SerializedName("hasParamParticipantId1")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamParticipantId1;

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
    * @Serializer\SerializedName("paramParticipantId1Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId1Description;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramParticipantId2Description")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId2Description;

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
    public function isHasParamParticipantId1(): ?bool
    {
        return $this->_hasParamParticipantId1;
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
    public function getParamParticipantId1Description(): ?string
    {
        return $this->_paramParticipantId1Description;
    }

    /**
     * @return string|null
     */
    public function getParamParticipantId2Description(): ?string
    {
        return $this->_paramParticipantId2Description;
    }

}
