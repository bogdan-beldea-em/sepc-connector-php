<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class Market
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class Market implements Stringable
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
     * @return Market
     */
    public static function wrap(array $wrapped_obj): Market
    {
        return new Market($wrapped_obj);
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
    public function getBettingTypeId(): ?int
    {
        return $this->_wrapped_obj['bettingTypeId'];
    }


    /**
     * @return int|null
     */
    public function getScoringUnitId(): ?int
    {
        return $this->_wrapped_obj['scoringUnitId'];
    }


    /**
     * @return int|null
     */
    public function getNumberOfOutcomes(): ?int
    {
        return $this->_wrapped_obj['numberOfOutcomes'];
    }


    /**
     * @return bool|null
     */
    public function isComplete(): ?bool
    {
        return $this->_wrapped_obj['isComplete'];
    }


    /**
     * @return bool|null
     */
    public function isClosed(): ?bool
    {
        return $this->_wrapped_obj['isClosed'];
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
    public function getDiscriminator(): ?string
    {
        return $this->_wrapped_obj['discriminator'];
    }


    /**
     * @return float|null
     */
    public function getParamFloat2(): ?float
    {
        return $this->_wrapped_obj['paramFloat2'];
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
    public function getParamParticipantId2(): ?int
    {
        return $this->_wrapped_obj['paramParticipantId2'];
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
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
