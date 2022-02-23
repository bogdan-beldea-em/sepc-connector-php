<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class MarketOutcomeRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="MarketOutcomeRelation")
 */
class MarketOutcomeRelation implements Stringable
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

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("MarketOutcomeRelation"))
            ->addProperty("outcomeId", $this->_outcomeId)
            ->addProperty("type", $this->_type)
            ->addProperty("id", $this->_id)
            ->addProperty("marketId", $this->_marketId)
            ->addProperty("version", $this->_version)
            ;
    }
}
