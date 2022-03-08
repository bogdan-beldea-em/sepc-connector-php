<?php

namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventActionTypeUsage
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventActionTypeUsage implements Stringable
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
     * @return EventActionTypeUsage
     */
    public static function wrap($wrapped_obj): EventActionTypeUsage
    {
        return new EventActionTypeUsage($wrapped_obj);
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
     * @return false|string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}