<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventInfoStatus
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventInfoStatus implements Stringable
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
     * @return EventInfoStatus
     */
    public static function wrap(array $wrapped_obj): EventInfoStatus
    {
        return new EventInfoStatus($wrapped_obj);
    }


    /**
     * @return bool|null
     */
    public function isAvailable(): ?bool
    {
        return $this->_wrapped_obj['isAvailable'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
