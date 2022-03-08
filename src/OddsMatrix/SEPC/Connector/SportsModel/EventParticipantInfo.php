<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventParticipantInfo
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventParticipantInfo implements Stringable
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
     * @return EventParticipantInfo
     */
    public static function wrap(array $wrapped_obj): EventParticipantInfo
    {
        return new EventParticipantInfo($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->_wrapped_obj['typeId'];
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
    public function getProviderId(): ?int
    {
        return $this->_wrapped_obj['providerId'];
    }


    /**
     * @return int|null
     */
    public function getStatusId(): ?int
    {
        return $this->_wrapped_obj['statusId'];
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
    public function getSourceId(): ?int
    {
        return $this->_wrapped_obj['sourceId'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
