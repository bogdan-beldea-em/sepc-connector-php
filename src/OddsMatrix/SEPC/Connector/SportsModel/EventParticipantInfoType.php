<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventParticipantInfoType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventParticipantInfoType implements Stringable
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
     * @return EventParticipantInfoType
     */
    public static function wrap(array $wrapped_obj): EventParticipantInfoType
    {
        return new EventParticipantInfoType($wrapped_obj);
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
