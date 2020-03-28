<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

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
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("outcomeTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_outcomeTypeId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("bettingTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_bettingTypeId;

    /**
     * @return int
     */
    public function getOutcomeTypeId(): int
    {
        return $this->_outcomeTypeId;
    }

    /**
     * @return int
     */
    public function getBettingTypeId(): int
    {
        return $this->_bettingTypeId;
    }

}
