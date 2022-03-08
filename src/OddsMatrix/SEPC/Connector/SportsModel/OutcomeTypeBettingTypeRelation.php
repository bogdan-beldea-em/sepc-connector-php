<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class OutcomeTypeBettingTypeRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class OutcomeTypeBettingTypeRelation implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait;

    protected $_wrapped_obj;

    private function __construct($wrapped_obj)
    {
        $this->_wrapped_obj = $wrapped_obj;
    }

    public static function wrap($wrapped_obj): OutcomeTypeBettingTypeRelation
    {
        return new OutcomeTypeBettingTypeRelation($wrapped_obj);
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
    public function getBettingTypeId(): ?int
    {
        return $this->_wrapped_obj['bettingTypeId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
