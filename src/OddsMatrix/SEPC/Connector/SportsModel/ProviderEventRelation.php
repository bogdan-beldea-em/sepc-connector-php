<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class ProviderEventRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class ProviderEventRelation implements Stringable
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
     * @return ProviderEventRelation
     */
    public static function wrap(array $wrapped_obj): ProviderEventRelation
    {
        return new ProviderEventRelation($wrapped_obj);
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
    public function getEventId(): ?int
    {
        return $this->_wrapped_obj['eventId'];
    }


    /**
     * @return string|null
     */
    public function getStartTime(): ?string
    {
        return $this->_wrapped_obj['startTime'];
    }


    /**
     * @return int|null
     */
    public function getTimeQualityRank(): ?int
    {
        return $this->_wrapped_obj['timeQualityRank'];
    }


    /**
     * @return bool|null
     */
    public function isOffersLiveOdds(): ?bool
    {
        return $this->_wrapped_obj['offersLiveOdds'];
    }


    /**
     * @return bool|null
     */
    public function isOffersLiveTV(): ?bool
    {
        return $this->_wrapped_obj['offersLiveTV'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
