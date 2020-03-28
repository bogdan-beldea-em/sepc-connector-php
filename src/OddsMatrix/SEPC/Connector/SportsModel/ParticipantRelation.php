<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ParticipantRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="ParticipantRelation")
 */
class ParticipantRelation
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
    * @Serializer\SerializedName("fromParticipantId")
    * @Serializer\XmlAttribute()
    */
    private $_fromParticipantId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("toParticipantId")
    * @Serializer\XmlAttribute()
    */
    private $_toParticipantId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramParticipantRoleId")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantRoleId;

    /**
    * @var \DateTime
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("startTime")
    * @Serializer\XmlAttribute()
    */
    private $_startTime;

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
    public function getFromParticipantId(): int
    {
        return $this->_fromParticipantId;
    }

    /**
     * @return int
     */
    public function getToParticipantId(): int
    {
        return $this->_toParticipantId;
    }

    /**
     * @return int
     */
    public function getParamParticipantRoleId(): int
    {
        return $this->_paramParticipantRoleId;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime(): \DateTime
    {
        return $this->_startTime;
    }

}
