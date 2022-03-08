<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventInfoType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventInfoType implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;

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
     * @return EventInfoType
     */
    public static function wrap(array $wrapped_obj): EventInfoType
    {
        return new EventInfoType($wrapped_obj);
    }


    /**
     * @return bool|null
     */
    public function isHasParamFloat1(): ?bool
    {
        return $this->_wrapped_obj['hasParamFloat1'];
    }


    /**
     * @return string|null
     */
    public function getParamFloat1Description(): ?string
    {
        return $this->_wrapped_obj['paramFloat1Description'];
    }


    /**
     * @return bool|null
     */
    public function isHasParamFloat2(): ?bool
    {
        return $this->_wrapped_obj['hasParamFloat2'];
    }


    /**
     * @return string|null
     */
    public function getParamFloat2Description(): ?string
    {
        return $this->_wrapped_obj['paramFloat2Description'];
    }


    /**
     * @return bool|null
     */
    public function isHasParamParticipantId1(): ?bool
    {
        return $this->_wrapped_obj['hasParamParticipantId1'];
    }


    /**
     * @return string|null
     */
    public function getParamParticipantId1Description(): ?string
    {
        return $this->_wrapped_obj['paramParticipantId1Description'];
    }


    /**
     * @return bool|null
     */
    public function isHasParamParticipantId2(): ?bool
    {
        return $this->_wrapped_obj['hasParamParticipantId2'];
    }


    /**
     * @return string|null
     */
    public function getParamParticipantId2Description(): ?string
    {
        return $this->_wrapped_obj['paramParticipantId2Description'];
    }


    /**
     * @return bool|null
     */
    public function isHasParamEventPartId1(): ?bool
    {
        return $this->_wrapped_obj['hasParamEventPartId1'];
    }


    /**
     * @return bool|null
     */
    public function isHasParamString1(): ?bool
    {
        return $this->_wrapped_obj['hasParamString1'];
    }


    /**
     * @return bool|null
     */
    public function isHasParamBoolean1(): ?bool
    {
        return $this->_wrapped_obj['hasParamBoolean1'];
    }


    /**
     * @return bool|null
     */
    public function isHasParamEventStatusId1(): ?bool
    {
        return $this->_wrapped_obj['hasParamEventStatusId1'];
    }


    /**
     * @return bool|null
     */
    public function isHasParamTime1(): ?bool
    {
        return $this->_wrapped_obj['hasParamTime1'];
    }


    /**
     * @return bool|null
     */
    public function isParamParticipantIdsMustBeOrdered(): ?bool
    {
        return $this->_wrapped_obj['paramParticipantIdsMustBeOrdered'];
    }


    /**
     * @return bool|null
     */
    public function isHasParamScoringUnitId1(): ?bool
    {
        return $this->_wrapped_obj['hasParamScoringUnitId1'];
    }


    /**
     * @return string|null
     */
    public function getParamString1Description(): ?string
    {
        return $this->_wrapped_obj['paramString1Description'];
    }


    /**
     * @return string|null
     */
    public function getParamString1PossibleValues(): ?string
    {
        return $this->_wrapped_obj['paramString1PossibleValues'];
    }


    /**
     * @return string|null
     */
    public function getParamBoolean1Description(): ?string
    {
        return $this->_wrapped_obj['paramBoolean1Description'];
    }


    /**
     * @return string|null
     */
    public function getParamEventPartId1Description(): ?string
    {
        return $this->_wrapped_obj['paramEventPartId1Description'];
    }


    /**
     * @return string|null
     */
    public function getParamEventStatusId1Description(): ?string
    {
        return $this->_wrapped_obj['paramEventStatusId1Description'];
    }


    /**
     * @return string|null
     */
    public function getParamTime1Description(): ?string
    {
        return $this->_wrapped_obj['paramTime1Description'];
    }


    /**
     * @return string|null
     */
    public function getParamScoringUnitId1Description(): ?string
    {
        return $this->_wrapped_obj['paramScoringUnitId1Description'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
