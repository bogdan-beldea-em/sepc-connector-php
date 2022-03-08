<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class ProviderOutcomeRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class ProviderOutcomeRelation implements Stringable
{
    use IdentifiableModelTrait, UpdateTimeTrait;

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
     * @return ProviderOutcomeRelation
     */
    public static function wrap(array $wrapped_obj): ProviderOutcomeRelation
    {
        return new ProviderOutcomeRelation($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getStatusId(): ?int
    {
        return $this->_wrapped_obj['statusId'];
    }


    /**
     * @return int|null
     */
    public function getProviderId(): ?int
    {
        return $this->_wrapped_obj['providerId'];
    }


    /**
     * @return int|null
     */
    public function getOutcomeId(): ?int
    {
        return $this->_wrapped_obj['outcomeId'];
    }


    /**
     * @return int|null
     */
    public function getQualityRank(): ?int
    {
        return $this->_wrapped_obj['qualityRank'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
