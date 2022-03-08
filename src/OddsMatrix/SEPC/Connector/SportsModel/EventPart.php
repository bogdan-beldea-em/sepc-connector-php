<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventPart
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventPart implements Stringable
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
     * @return EventPart
     */
    public static function wrap(array $wrapped_obj): EventPart
    {
        return new EventPart($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getOrderNum(): ?int
    {
        return $this->_wrapped_obj['orderNum'];
    }


    /**
     * @return bool|null
     */
    public function isDrawPossible(): ?bool
    {
        return $this->_wrapped_obj['isDrawPossible'];
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
