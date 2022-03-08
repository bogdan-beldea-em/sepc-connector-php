<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventActionType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventActionType implements Stringable
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
     * @return EventActionType
     */
    public static function wrap(array $wrapped_obj): EventActionType
    {
        return new EventActionType($wrapped_obj);
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
    public function isHasParamParticipantId2(): ?bool
    {
        return $this->_wrapped_obj['hasParamParticipantId2'];
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
    public function getParamParticipantId2Description(): ?string
    {
        return $this->_wrapped_obj['paramParticipantId2Description'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
