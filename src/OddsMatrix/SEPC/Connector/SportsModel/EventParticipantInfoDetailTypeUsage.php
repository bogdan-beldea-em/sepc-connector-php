<?php

namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventParticipantInfoDetailTypeUsage
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventParticipantInfoDetailTypeUsage implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait;

    /**
     * @var array
     */
    protected $_wrapped_obj;

    /**
     * @param array $wrapped_obj
     */
    private function __construct(array $wrapped_obj) {
        $this->_wrapped_obj = $wrapped_obj;
    }

    /**
     * @param array $wrapped_obj
     * @return EventParticipantInfoDetailTypeUsage
     */
    public static function wrap(array $wrapped_obj): EventParticipantInfoDetailTypeUsage
    {
        return new EventParticipantInfoDetailTypeUsage($wrapped_obj);
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
    public function getEventParticipantInfoTypeId(): ?int
    {
        return $this->_wrapped_obj['eventParticipantInfoTypeId'];
    }

    /**
     * @return int|null
     */
    public function getEventParticipantInfoDetailTypeId(): ?int
    {
        return $this->_wrapped_obj['eventParticipantInfoDetailTypeId'];
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}