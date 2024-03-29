<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class OutcomeTypeUsage
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class OutcomeTypeUsage implements Stringable
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
     * @return OutcomeTypeUsage
     */
    public static function wrap(array $wrapped_obj): OutcomeTypeUsage
    {
        return new OutcomeTypeUsage($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getOutcomeTypeId(): ?int
    {
        return $this->_wrapped_obj['outcomeTypeId'];
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
    public function getEventPartId(): ?int
    {
        return $this->_wrapped_obj['eventPartId'];
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
    public function getScoringUnitId(): ?int
    {
        return $this->_wrapped_obj['scoringUnitId'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
