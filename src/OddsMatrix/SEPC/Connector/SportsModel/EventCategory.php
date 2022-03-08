<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventCategory
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventCategory implements Stringable
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
     * @return EventCategory
     */
    public static function wrap(array $wrapped_obj): EventCategory
    {
        return new EventCategory($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getSportId(): ?int
    {
        return $this->_wrapped_obj['sportId'];
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
