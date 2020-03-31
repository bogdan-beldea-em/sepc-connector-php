<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class EventActionDetail
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventActionDetail")
 */
class EventActionDetail
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("typeId")
    * @Serializer\XmlAttribute()
    */
    private $_typeId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("eventActionId")
    * @Serializer\XmlAttribute()
    */
    private $_eventActionId;

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
    * @Serializer\SerializedName("paramParticipantId1")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId1;

    /**
    * @var float|null
    *
    * @Serializer\Type("float")
    * @Serializer\SerializedName("paramFloat1")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat1;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramString1")
    * @Serializer\XmlAttribute()
    */
    private $_paramString1;

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
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->_typeId;
    }

    /**
     * @return int|null
     */
    public function getEventActionId(): ?int
    {
        return $this->_eventActionId;
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
    public function getParamParticipantId1(): ?int
    {
        return $this->_paramParticipantId1;
    }

    /**
     * @return float|null
     */
    public function getParamFloat1(): ?float
    {
        return $this->_paramFloat1;
    }

    /**
     * @return string|null
     */
    public function getParamString1(): ?string
    {
        return $this->_paramString1;
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

}
