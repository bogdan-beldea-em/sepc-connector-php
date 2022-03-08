<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EntityPropertyType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EntityPropertyType implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

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
     * @return EntityPropertyType
     */
    public static function wrap(array $wrapped_obj): EntityPropertyType
    {
        return new EntityPropertyType($wrapped_obj);
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
