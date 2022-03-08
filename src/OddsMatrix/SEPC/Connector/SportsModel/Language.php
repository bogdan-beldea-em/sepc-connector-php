<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class Language
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class Language implements Stringable
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
     * @return Language
     */
    public static function wrap(array $wrapped_obj): Language
    {
        return new Language($wrapped_obj);
    }


    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->_wrapped_obj['code'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
