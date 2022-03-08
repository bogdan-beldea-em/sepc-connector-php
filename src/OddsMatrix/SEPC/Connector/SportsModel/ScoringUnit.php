<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class ScoringUnit
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class ScoringUnit implements Stringable
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
     * @return ScoringUnit
     */
    public static function wrap(array $wrapped_obj): ScoringUnit
    {
        return new ScoringUnit($wrapped_obj);
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
