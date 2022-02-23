<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringUtil;

/**
 * Class ParticipantRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="ParticipantRelation")
 */
class ParticipantRelation implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait;

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
    * @Serializer\SerializedName("fromParticipantId")
    * @Serializer\XmlAttribute()
    */
    private $_fromParticipantId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("toParticipantId")
    * @Serializer\XmlAttribute()
    */
    private $_toParticipantId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("paramParticipantRoleId")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantRoleId;

    /**
    * @var \DateTime|null
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("startTime")
    * @Serializer\XmlAttribute()
    */
    private $_startTime;

    /**
    * @var \DateTime|null
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("endTime")
    * @Serializer\XmlAttribute()
    */
    private $_endTime;

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
    public function getFromParticipantId(): ?int
    {
        return $this->_fromParticipantId;
    }

    /**
     * @return int|null
     */
    public function getToParticipantId(): ?int
    {
        return $this->_toParticipantId;
    }

    /**
     * @return int|null
     */
    public function getParamParticipantRoleId(): ?int
    {
        return $this->_paramParticipantRoleId;
    }

    /**
     * @return \DateTime|null
     */
    public function getStartTime(): ?\DateTime
    {
        return $this->_startTime;
    }

    /**
     * @return \DateTime|null
     */
    public function getEndTime(): ?\DateTime
    {
        return $this->_endTime;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("ParticipantRelation"))
            ->addProperty("paramParticipantRoleId", $this->_paramParticipantRoleId)
            ->addProperty("startTime", ToStringUtil::transformDate($this->_startTime))
            ->addProperty("version", $this->_version)
            ->addProperty("id", $this->_id)
            ->addProperty("toParticipantId", $this->_toParticipantId)
            ->addProperty("typeId", $this->_typeId)
            ->addProperty("fromParticipantId", $this->_fromParticipantId)
            ->addProperty("endTime", ToStringUtil::transformDate($this->_endTime))
            ;
    }
}
