<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class LocationRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class LocationRelation implements Stringable
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
     * @return LocationRelation
     */
    public static function wrap(array $wrapped_obj): LocationRelation
    {
        return new LocationRelation($wrapped_obj);
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
    public function getFromLocationId(): ?int
    {
        return $this->_wrapped_obj['fromLocationId'];
    }


    /**
     * @return int|null
     */
    public function getToLocationId(): ?int
    {
        return $this->_wrapped_obj['toLocationId'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
