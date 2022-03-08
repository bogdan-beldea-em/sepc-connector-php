<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class OutcomeType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class OutcomeType implements Stringable
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
     * @return OutcomeType
     */
    public static function wrap(array $wrapped_obj): OutcomeType
    {
        return new OutcomeType($wrapped_obj);
    }


    /**
     * @return bool|null
     */
    public function isHasParamFloat1(): ?bool
    {
        return $this->_wrapped_obj['hasParamFloat1'];
    }


    /**
     * @return bool|null
     */
    public function isHasParamFloat2(): ?bool
    {
        return $this->_wrapped_obj['hasParamFloat2'];
    }


    /**
     * @return bool|null
     */
    public function isHasParamFloat3(): ?bool
    {
        return $this->_wrapped_obj['hasParamFloat3'];
    }


    /**
     * @return bool|null
     */
    public function isHasParamBoolean1(): ?bool
    {
        return $this->_wrapped_obj['hasParamBoolean1'];
    }


    /**
     * @return string|null
     */
    public function getParamBoolean1Description(): ?string
    {
        return $this->_wrapped_obj['paramBoolean1Description'];
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
    public function isHasParamParticipantId1(): ?bool
    {
        return $this->_wrapped_obj['hasParamParticipantId1'];
    }


    /**
     * @return bool|null
     */
    public function isParamParticipant1MustBePrimary(): ?bool
    {
        return $this->_wrapped_obj['paramParticipant1MustBePrimary'];
    }


    /**
     * @return bool|null
     */
    public function isParamParticipant1MustBeRoot(): ?bool
    {
        return $this->_wrapped_obj['paramParticipant1MustBeRoot'];
    }


    /**
     * @return bool|null
     */
    public function isHasParamParticipantId2(): ?bool
    {
        return $this->_wrapped_obj['hasParamParticipantId2'];
    }


    /**
     * @return bool|null
     */
    public function isParamParticipant2MustBePrimary(): ?bool
    {
        return $this->_wrapped_obj['paramParticipant2MustBePrimary'];
    }


    /**
     * @return bool|null
     */
    public function isParamParticipant2MustBeRoot(): ?bool
    {
        return $this->_wrapped_obj['paramParticipant2MustBeRoot'];
    }


    /**
     * @return bool|null
     */
    public function isHasParamParticipantId3(): ?bool
    {
        return $this->_wrapped_obj['hasParamParticipantId3'];
    }


    /**
     * @return bool|null
     */
    public function isParamParticipant3MustBePrimary(): ?bool
    {
        return $this->_wrapped_obj['paramParticipant3MustBePrimary'];
    }


    /**
     * @return bool|null
     */
    public function isParamParticipant3MustBeRoot(): ?bool
    {
        return $this->_wrapped_obj['paramParticipant3MustBeRoot'];
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
    public function isHasParamScoringUnitId1(): ?bool
    {
        return $this->_wrapped_obj['hasParamScoringUnitId1'];
    }


    /**
     * @return string|null
     */
    public function getParamParticipantId1Description(): ?string
    {
        return $this->_wrapped_obj['paramParticipantId1Description'];
    }


    /**
     * @return string|null
     */
    public function getParamFloat1Description(): ?string
    {
        return $this->_wrapped_obj['paramFloat1Description'];
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
    public function getParamParticipantId2Description(): ?string
    {
        return $this->_wrapped_obj['paramParticipantId2Description'];
    }


    /**
     * @return string|null
     */
    public function getParamFloat2Description(): ?string
    {
        return $this->_wrapped_obj['paramFloat2Description'];
    }


    /**
     * @return string|null
     */
    public function getParamFloat3Description(): ?string
    {
        return $this->_wrapped_obj['paramFloat3Description'];
    }


    /**
     * @return string|null
     */
    public function getParamParticipantId3Description(): ?string
    {
        return $this->_wrapped_obj['paramParticipantId3Description'];
    }


    /**
     * @return int|null
     */
    public function getParamParticipant1MustHaveRoleId(): ?int
    {
        return $this->_wrapped_obj['paramParticipant1MustHaveRoleId'];
    }


    /**
     * @return string|null
     */
    public function getParamEventPartId1Description(): ?string
    {
        return $this->_wrapped_obj['paramEventPartId1Description'];
    }


    /**
     * @return bool|null
     */
    public function isParamParticipant1MustHaveRole(): ?bool
    {
        return $this->_wrapped_obj['paramParticipant1MustHaveRole'];
    }


    /**
     * @return bool|null
     */
    public function isParamParticipant2MustHaveRole(): ?bool
    {
        return $this->_wrapped_obj['paramParticipant2MustHaveRole'];
    }


    /**
     * @return bool|null
     */
    public function isParamParticipant3MustHaveRole(): ?bool
    {
        return $this->_wrapped_obj['paramParticipant3MustHaveRole'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
