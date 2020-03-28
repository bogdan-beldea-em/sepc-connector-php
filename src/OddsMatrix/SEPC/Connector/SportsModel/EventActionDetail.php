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
    use IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("typeId")
    * @Serializer\XmlAttribute()
    */
    private $_typeId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("eventActionId")
    * @Serializer\XmlAttribute()
    */
    private $_eventActionId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("statusId")
    * @Serializer\XmlAttribute()
    */
    private $_statusId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramParticipantId1")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantId1;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat1")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat1;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramString1")
    * @Serializer\XmlAttribute()
    */
    private $_paramString1;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("paramBoolean1")
    * @Serializer\XmlAttribute()
    */
    private $_paramBoolean1;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramFloat2")
    * @Serializer\XmlAttribute()
    */
    private $_paramFloat2;

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->_typeId;
    }

    /**
     * @return int
     */
    public function getEventActionId(): int
    {
        return $this->_eventActionId;
    }

    /**
     * @return int
     */
    public function getStatusId(): int
    {
        return $this->_statusId;
    }

    /**
     * @return int
     */
    public function getParamParticipantId1(): int
    {
        return $this->_paramParticipantId1;
    }

    /**
     * @return string
     */
    public function getParamFloat1(): string
    {
        return $this->_paramFloat1;
    }

    /**
     * @return string
     */
    public function getParamString1(): string
    {
        return $this->_paramString1;
    }

    /**
     * @return bool
     */
    public function isParamBoolean1(): bool
    {
        return $this->_paramBoolean1;
    }

    /**
     * @return string
     */
    public function getParamFloat2(): string
    {
        return $this->_paramFloat2;
    }

}
