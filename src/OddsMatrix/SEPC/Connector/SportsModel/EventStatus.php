<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventStatus
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventStatus implements Stringable
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
     * @return EventStatus
     */
    public static function wrap(array $wrapped_obj): EventStatus
    {
        return new EventStatus($wrapped_obj);
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
