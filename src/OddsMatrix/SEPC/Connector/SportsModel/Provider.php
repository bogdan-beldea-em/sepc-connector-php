<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class Provider
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class Provider implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

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
     * @return Provider
     */
    public static function wrap(array $wrapped_obj): Provider
    {
        return new Provider($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getLocationId(): ?int
    {
        return $this->_wrapped_obj['locationId'];
    }


    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->_wrapped_obj['url'];
    }


    /**
     * @return bool|null
     */
    public function isBookmaker(): ?bool
    {
        return $this->_wrapped_obj['isBookmaker'];
    }


    /**
     * @return bool|null
     */
    public function isBettingExchange(): ?bool
    {
        return $this->_wrapped_obj['isBettingExchange'];
    }


    /**
     * @return float|null
     */
    public function getBettingCommissionVACs(): ?float
    {
        return $this->_wrapped_obj['bettingCommissionVACs'];
    }


    /**
     * @return bool|null
     */
    public function isLiveOddsApproved(): ?bool
    {
        return $this->_wrapped_obj['isLiveOddsApproved'];
    }


    /**
     * @return bool|null
     */
    public function isNewsSource(): ?bool
    {
        return $this->_wrapped_obj['isNewsSource'];
    }


    /**
     * @return bool|null
     */
    public function isEnabled(): ?bool
    {
        return $this->_wrapped_obj['isEnabled'];
    }


    /**
     * @return bool|null
     */
    public function isIncludeBettingVACs(): ?bool
    {
        return $this->_wrapped_obj['includeBettingVACs'];
    }


    /**
     * @return bool|null
     */
    public function isRequiresSettlement(): ?bool
    {
        return $this->_wrapped_obj['requiresSettlement'];
    }


    /**
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->_wrapped_obj['note'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
