<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class BettingOffer
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class BettingOffer implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait, UpdateTimeTrait;

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
     * @return BettingOffer
     */
    public static function wrap(array $wrapped_obj): BettingOffer
    {
        return new BettingOffer($wrapped_obj);
    }


    /**
     * @return float|null
     */
    public function getOdds(): ?float
    {
        return $this->_wrapped_obj['odds'];
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
    public function getSourceId(): ?int
    {
        return $this->_wrapped_obj['sourceId'];
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
    public function getBettingTypeId(): ?int
    {
        return $this->_wrapped_obj['bettingTypeId'];
    }


    /**
     * @return bool|null
     */
    public function isLive(): ?bool
    {
        return $this->_wrapped_obj['isLive'];
    }


    /**
     * @return int|null
     */
    public function getMultiplicity(): ?int
    {
        return $this->_wrapped_obj['multiplicity'];
    }


    /**
     * @return string|null
     */
    public function getCouponKey(): ?string
    {
        return $this->_wrapped_obj['couponKey'];
    }


    /**
     * @return int|null
     */
    public function getSlotNum(): ?int
    {
        return $this->_wrapped_obj['slotNum'];
    }


    /**
     * @return float|null
     */
    public function getVolume(): ?float
    {
        return $this->_wrapped_obj['volume'];
    }


    /**
     * @return string|null
     */
    public function getVolumeCurrencyId(): ?string
    {
        return $this->_wrapped_obj['volumeCurrencyId'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
