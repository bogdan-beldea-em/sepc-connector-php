<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class LocationType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class LocationType implements Stringable
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
     * @return LocationType
     */
    public static function wrap(array $wrapped_obj): LocationType
    {
        return new LocationType($wrapped_obj);
    }


    /**
     * @return bool|null
     */
    public function isHasCode(): ?bool
    {
        return $this->_wrapped_obj['hasCode'];
    }


    /**
     * @return string|null
     */
    public function getCodeDescription(): ?string
    {
        return $this->_wrapped_obj['codeDescription'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
