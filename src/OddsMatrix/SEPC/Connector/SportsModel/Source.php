<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class Source
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class Source implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait;

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
     * @return Source
     */
    public static function wrap(array $wrapped_obj): Source
    {
        return new Source($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getCollectorId(): ?int
    {
        return $this->_wrapped_obj['collectorId'];
    }


    /**
     * @return int|null
     */
    public function getProviderId(): ?int
    {
        return $this->_wrapped_obj['providerId'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
