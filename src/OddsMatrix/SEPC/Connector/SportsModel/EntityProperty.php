<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EntityProperty
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EntityProperty implements Stringable
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
     * @return EntityProperty
     */
    public static function wrap(array $wrapped_obj): EntityProperty
    {
        return new EntityProperty($wrapped_obj);
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
    public function getEntityTypeId(): ?int
    {
        return $this->_wrapped_obj['entityTypeId'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
