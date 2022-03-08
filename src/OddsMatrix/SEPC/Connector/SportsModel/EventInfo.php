<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventInfo
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventInfo implements Stringable
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
     * @return EventInfo
     */
    public static function wrap(array $wrapped_obj): EventInfo
    {
        return new EventInfo($wrapped_obj);
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
    public function getStatusId(): ?int
    {
        return $this->_wrapped_obj['statusId'];
    }


    /**
     * @return float|null
     */
    public function getParamFloat2(): ?float
    {
        return $this->_wrapped_obj['paramFloat2'];
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
    public function getEventPartId(): ?int
    {
        return $this->_wrapped_obj['eventPartId'];
    }


    /**
     * @return int|null
     */
    public function getParamParticipantId1(): ?int
    {
        return $this->_wrapped_obj['paramParticipantId1'];
    }


    /**
     * @return int|null
     */
    public function getParamParticipantId2(): ?int
    {
        return $this->_wrapped_obj['paramParticipantId2'];
    }


    /**
     * @return int|null
     */
    public function getParamScoringUnitId1(): ?int
    {
        return $this->_wrapped_obj['paramScoringUnitId1'];
    }


    /**
     * @return int|null
     */
    public function getParamEventStatusId1(): ?int
    {
        return $this->_wrapped_obj['paramEventStatusId1'];
    }


    /**
     * @return string|null
     */
    public function getParamEventPartId1(): ?string
    {
        return $this->_wrapped_obj['paramEventPartId1'];
    }


    /**
     * @return string|null
     */
    public function getParamString1(): ?string
    {
        return $this->_wrapped_obj['paramString1'];
    }


    /**
     * @return bool|null
     */
    public function isParamBoolean1(): ?bool
    {
        return $this->_wrapped_obj['paramBoolean1'];
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
