<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class Location
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class Location implements Stringable
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
     * @return Location
     */
    public static function wrap(array $wrapped_obj): Location
    {
        return new Location($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->_wrapped_obj['typeId'];
    }


    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->_wrapped_obj['code'];
    }


    /**
     * @return bool|null
     */
    public function isHistoric(): ?bool
    {
        return $this->_wrapped_obj['isHistoric'];
    }


    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->_wrapped_obj['url'];
    }


    /**
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->_wrapped_obj['note'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
