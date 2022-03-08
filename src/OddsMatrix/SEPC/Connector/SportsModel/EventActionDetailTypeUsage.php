<?php

namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventActionDetailTypeUsage
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventActionDetailTypeUsage implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait;

    /**
     * @var array
     */
    private $_wrapped_obj;

    /**
     * @param $wrapped_obj
     */
    private function __construct($wrapped_obj) {
        $this->_wrapped_obj = $wrapped_obj;
    }

    /**
     * @param $wrapped_obj
     * @return EventActionDetailTypeUsage
     */
    public static function wrap($wrapped_obj): EventActionDetailTypeUsage
    {
        return new EventActionDetailTypeUsage($wrapped_obj);
    }

    /**
     * @return int|null
     */
    public function getEventActionDetailTypeId(): ?int
    {
        return $this->_wrapped_obj['eventActionDetailTypeId'];
    }

    /**
     * @return int|null
     */
    public function getEventActionTypeId(): ?int
    {
        return $this->_wrapped_obj['eventActionTypeId'];
    }

    /**
     * @return int|null
     */
    public function getSportId(): ?int
    {
        return $this->_wrapped_obj['sportId'];
    }

    /**
     * @return false|string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}