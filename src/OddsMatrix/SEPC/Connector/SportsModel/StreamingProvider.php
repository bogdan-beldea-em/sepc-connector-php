<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class StreamingProvider
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class StreamingProvider implements Stringable
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
     * @return StreamingProvider
     */
    public static function wrap(array $wrapped_obj): StreamingProvider
    {
        return new StreamingProvider($wrapped_obj);
    }


    /**
     * @return string|null
     */
    public function getUrlTemplate(): ?string
    {
        return $this->_wrapped_obj['urlTemplate'];
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
