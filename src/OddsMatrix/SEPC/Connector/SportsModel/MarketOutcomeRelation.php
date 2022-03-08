<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class MarketOutcomeRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class MarketOutcomeRelation implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait;

    protected $_wrapped_obj;
    
    /**
     * @param array $wrapped_obj
     */
    private function __construct(array $wrapped_obj)
    {
        $this->_wrapped_obj = $wrapped_obj;
    }

    /**
     * @param array $wrapped_obj
     * @return MarketOutcomeRelation
     */
    public static function wrap(array $wrapped_obj): MarketOutcomeRelation
    {
        return new MarketOutcomeRelation($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getMarketId(): ?int
    {
        return $this->_wrapped_obj['marketId'];
    }


    /**
     * @return int|null
     */
    public function getOutcomeId(): ?int
    {
        return $this->_wrapped_obj['outcomeId'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
