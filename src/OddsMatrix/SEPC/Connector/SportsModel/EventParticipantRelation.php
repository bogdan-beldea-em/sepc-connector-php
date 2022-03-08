<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventParticipantRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventParticipantRelation implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait;

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
     * @return EventParticipantRelation
     */
    public static function wrap(array $wrapped_obj): EventParticipantRelation
    {
        return new EventParticipantRelation($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getEventId(): ?int
    {
        return $this->_wrapped_obj['eventId'];
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
    public function getParticipantId(): ?int
    {
        return $this->_wrapped_obj['participantId'];
    }


    /**
     * @return int|null
     */
    public function getParticipantRoleId(): ?int
    {
        return $this->_wrapped_obj['participantRoleId'];
    }


    /**
     * @return int|null
     */
    public function getParentParticipantId(): ?int
    {
        return $this->_wrapped_obj['parentParticipantId'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
