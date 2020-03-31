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
    use TypedTrait, IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("marketId")
    * @Serializer\XmlAttribute()
    */
    private $_marketId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("outcomeId")
    * @Serializer\XmlAttribute()
    */
    private $_outcomeId;

    /**
     * @return int|null
     */
    public function getMarketId(): ?int
    {
        return $this->_marketId;
    }

    /**
     * @return int|null
     */
    public function getOutcomeId(): ?int
    {
        return $this->_outcomeId;
    }

}
