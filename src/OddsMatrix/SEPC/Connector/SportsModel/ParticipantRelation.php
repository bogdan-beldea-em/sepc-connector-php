<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class ParticipantRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class ParticipantRelation implements Stringable
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
     * @return ParticipantRelation
     */
    public static function wrap(array $wrapped_obj): ParticipantRelation
    {
        return new ParticipantRelation($wrapped_obj);
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
    public function getFromParticipantId(): ?int
    {
        return $this->_wrapped_obj['fromParticipantId'];
    }


    /**
     * @return int|null
     */
    public function getToParticipantId(): ?int
    {
        return $this->_wrapped_obj['toParticipantId'];
    }


    /**
     * @return int|null
     */
    public function getParamParticipantRoleId(): ?int
    {
        return $this->_wrapped_obj['paramParticipantRoleId'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
