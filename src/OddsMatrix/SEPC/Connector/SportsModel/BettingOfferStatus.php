<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class BettingOfferStatus
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class BettingOfferStatus implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;

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
     * @return BettingOfferStatus
     */
    public static function wrap(array $wrapped_obj): BettingOfferStatus
    {
        return new BettingOfferStatus($wrapped_obj);
    }


    /**
     * @return bool|null
     */
    public function isAvailable(): ?bool
    {
        return $this->_wrapped_obj['isAvailable'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
