<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class Sport
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class Sport implements Stringable
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
     * @return Sport
     */
    public static function wrap(array $wrapped_obj): Sport
    {
        return new Sport($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->_wrapped_obj['parentId'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
