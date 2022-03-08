<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class ParticipantRelationType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class ParticipantRelationType implements Stringable
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
     * @return ParticipantRelationType
     */
    public static function wrap(array $wrapped_obj): ParticipantRelationType
    {
        return new ParticipantRelationType($wrapped_obj);
    }


    /**
     * @return bool|null
     */
    public function isHasParamParticipantRole(): ?bool
    {
        return $this->_wrapped_obj['hasParamParticipantRole'];
    }


    /**
     * @return string|null
     */
    public function getParamParticipantRoleIdDescription(): ?string
    {
        return $this->_wrapped_obj['paramParticipantRoleIdDescription'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
