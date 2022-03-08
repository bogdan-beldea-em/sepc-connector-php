<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventParticipantInfoDetailType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventParticipantInfoDetailType implements Stringable
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
     * @return EventParticipantInfoDetailType
     */
    public static function wrap(array $wrapped_obj): EventParticipantInfoDetailType
    {
        return new EventParticipantInfoDetailType($wrapped_obj);
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
    public function isHasParamParticipantId1(): ?bool
    {
        return $this->_wrapped_obj['hasParamParticipantId1'];
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
    public function isHasParamString1(): ?bool
    {
        return $this->_wrapped_obj['hasParamString1'];
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
    public function getParamParticipantId1Description(): ?string
    {
        return $this->_wrapped_obj['paramParticipantId1Description'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
