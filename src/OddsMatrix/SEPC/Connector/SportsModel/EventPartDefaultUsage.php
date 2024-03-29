<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventPartDefaultUsage
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventPartDefaultUsage implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait;

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
     * @return EventPartDefaultUsage
     */
    public static function wrap(array $wrapped_obj): EventPartDefaultUsage
    {
        return new EventPartDefaultUsage($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getParentEventId(): ?int
    {
        return $this->_wrapped_obj['parentEventId'];
    }


    /**
     * @return int|null
     */
    public function getEventTypeId(): ?int
    {
        return $this->_wrapped_obj['eventTypeId'];
    }


    /**
     * @return int|null
     */
    public function getSportId(): ?int
    {
        return $this->_wrapped_obj['sportId'];
    }


    /**
     * @return int|null
     */
    public function getRootPartId(): ?int
    {
        return $this->_wrapped_obj['rootPartId'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
