<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class ParticipantRole
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class ParticipantRole implements Stringable
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
     * @return ParticipantRole
     */
    public static function wrap(array $wrapped_obj): ParticipantRole
    {
        return new ParticipantRole($wrapped_obj);
    }


    /**
     * @return bool|null
     */
    public function isPrimary(): ?bool
    {
        return $this->_wrapped_obj['isPrimary'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
