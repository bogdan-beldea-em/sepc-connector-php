<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class OutcomeTypeBettingTypeRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="OutcomeTypeBettingTypeRelation")
 */
class OutcomeTypeBettingTypeRelation
{
    use IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("outcomeTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_outcomeTypeId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("bettingTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_bettingTypeId;

    /**
     * @return int|null
     */
    public function getOutcomeTypeId(): ?int
    {
        return $this->_outcomeTypeId;
    }

    /**
     * @return int|null
     */
    public function getBettingTypeId(): ?int
    {
        return $this->_bettingTypeId;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("OutcomeTypeBettingTypeRelation"))
            ->addProperty("version", $this->_version)
            ->addProperty("id", $this->_id)
            ->addProperty("bettingTypeId", $this->_bettingTypeId)
            ->addProperty("outcomeTypeId", $this->_outcomeTypeId)
            ;
    }
}
