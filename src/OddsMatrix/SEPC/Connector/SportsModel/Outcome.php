<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class Outcome
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class Outcome implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait, NamedTrait;

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
     * @return Outcome
     */
    public static function wrap(array $wrapped_obj): Outcome
    {
        return new Outcome($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->_wrapped_obj['typeId'];
    }


    /**
     * @return bool|null
     */
    public function isNegation(): ?bool
    {
        return $this->_wrapped_obj['isNegation'];
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
     * @return string|null
     */
    public function getParamFloat1(): ?string
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
     * @return int|null
     */
    public function getParamScoringUnitId1(): ?int
    {
        return $this->_wrapped_obj['paramScoringUnitId1'];
    }


    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->_wrapped_obj['code'];
    }


    /**
     * @return bool|null
     */
    public function isSettlementRequired(): ?bool
    {
        return $this->_wrapped_obj['settlementRequired'];
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
    public function getParamFloat2(): ?float
    {
        return $this->_wrapped_obj['paramFloat2'];
    }


    /**
     * @return int|null
     */
    public function getParamParticipantId2(): ?int
    {
        return $this->_wrapped_obj['paramParticipantId2'];
    }


    /**
     * @return string|null
     */
    public function getParamFloat3(): ?string
    {
        return $this->_wrapped_obj['paramFloat3'];
    }


    /**
     * @return int|null
     */
    public function getParamParticipantId3(): ?int
    {
        return $this->_wrapped_obj['paramParticipantId3'];
    }


    /**
     * @return string|null
     */
    public function getParamString1(): ?string
    {
        return $this->_wrapped_obj['paramString1'];
    }


    /**
     * @return int|null
     */
    public function getParamEventPartId1(): ?int
    {
        return $this->_wrapped_obj['paramEventPartId1'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
