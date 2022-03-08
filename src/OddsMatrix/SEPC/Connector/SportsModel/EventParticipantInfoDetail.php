<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventParticipantInfoDetail
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventParticipantInfoDetail implements Stringable
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
     * @return EventParticipantInfoDetail
     */
    public static function wrap(array $wrapped_obj): EventParticipantInfoDetail
    {
        return new EventParticipantInfoDetail($wrapped_obj);
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
    public function getEventParticipantInfoId(): ?int
    {
        return $this->_wrapped_obj['eventParticipantInfoId'];
    }


    /**
     * @return int|null
     */
    public function getStatusId(): ?int
    {
        return $this->_wrapped_obj['statusId'];
    }


    /**
     * @return bool|null
     */
    public function isParamBoolean1(): ?bool
    {
        return $this->_wrapped_obj['paramBoolean1'];
    }


    /**
     * @return float|null
     */
    public function getParamFloat1(): ?float
    {
        return $this->_wrapped_obj['paramFloat1'];
    }


    /**
     * @return int|null
     */
    public function getParamParticipantId1(): ?int
    {
        return $this->_wrapped_obj['paramParticipantId1'];
    }


    /**
     * @return string|null
     */
    public function getParamString1(): ?string
    {
        return $this->_wrapped_obj['paramString1'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
