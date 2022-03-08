<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class BettingTypeUsage
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class BettingTypeUsage implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait;

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
     * @return BettingTypeUsage
     */
    public static function wrap(array $wrapped_obj): BettingTypeUsage
    {
        return new BettingTypeUsage($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getBettingTypeId(): ?int
    {
        return $this->_wrapped_obj['bettingTypeId'];
    }


    /**
     * @return int|null
     */
    public function getEventTypeId(): ?int
    {
        return $this->_wrapped_obj['eventTypeId'];
    }


    /**
     * @return int|null
     */
    public function getSportId(): ?int
    {
        return $this->_wrapped_obj['sportId'];
    }


    /**
     * @return int|null
     */
    public function getEventPartId(): ?int
    {
        return $this->_wrapped_obj['eventPartId'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
