<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class Translation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class Translation implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait, NamedTrait;

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
     * @return Translation
     */
    public static function wrap(array $wrapped_obj): Translation
    {
        return new Translation($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->_wrapped_obj['entityId'];
    }


    /**
     * @return int|null
     */
    public function getEntityTypeId(): ?int
    {
        return $this->_wrapped_obj['entityTypeId'];
    }


    /**
     * @return int|null
     */
    public function getLanguageId(): ?int
    {
        return $this->_wrapped_obj['languageId'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
