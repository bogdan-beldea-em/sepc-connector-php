<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class MarketOutcomeRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="MarketOutcomeRelation")
 */
class MarketOutcomeRelation
{
    use IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("marketId")
    * @Serializer\XmlAttribute()
    */
    private $_marketId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("outcomeId")
    * @Serializer\XmlAttribute()
    */
    private $_outcomeId;

    /**
     * @return int
     */
    public function getMarketId(): int
    {
        return $this->_marketId;
    }

    /**
     * @return int
     */
    public function getOutcomeId(): int
    {
        return $this->_outcomeId;
    }

}
