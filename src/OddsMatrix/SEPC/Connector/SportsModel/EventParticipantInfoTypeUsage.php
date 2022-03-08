<?php

namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventParticipantInfoTypeUsage
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventParticipantInfoTypeUsage implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait;

    /**
     * @var array
     */
    private $_wrapped_obj;

    /**
     * @param array $wrapped_obj
     */
    private function __construct(array $wrapped_obj)
    {
        $this->_wrapped_obj = $wrapped_obj;
    }

    /**
     * @param array $wrapped_obj
     * @return EventParticipantInfoTypeUsage
     */
    public static function wrap(array $wrapped_obj): EventParticipantInfoTypeUsage
    {
        return new EventParticipantInfoTypeUsage($wrapped_obj);
    }

    /**
     * @return int|null
     */
    public function getEventParticipantInfoTypeId(): ?int
    {
        return $this->_wrapped_obj['eventParticipantInfoTypeId'];
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
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}