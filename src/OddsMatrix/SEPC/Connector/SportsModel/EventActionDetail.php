<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class EventActionDetail
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventActionDetail")
 */
class EventActionDetail implements Stringable
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

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("EventActionDetail"))
            ->addProperty("statusId", $this->_statusId)
            ->addProperty("paramFloat2", $this->_paramFloat2)
            ->addProperty("eventActionId", $this->_eventActionId)
            ->addProperty("type", $this->_type)
            ->addProperty("id", $this->_id)
            ->addProperty("paramBoolean1", $this->_paramBoolean1)
            ->addProperty("paramString1", $this->_paramString1)
            ->addProperty("version", $this->_version)
            ->addProperty("typeId", $this->_typeId)
            ->addProperty("paramParticipantId1", $this->_paramParticipantId1)
            ->addProperty("paramFloat1", $this->_paramFloat1)
            ;

    }
}
