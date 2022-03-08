<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class ParticipantUsage
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class ParticipantUsage implements Stringable
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
     * @return ParticipantUsage
     */
    public static function wrap(array $wrapped_obj): ParticipantUsage
    {
        return new ParticipantUsage($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getParticipantId(): ?int
    {
        return $this->_wrapped_obj['participantId'];
    }


    /**
     * @return int|null
     */
    public function getSportId(): ?int
    {
        return $this->_wrapped_obj['sportId'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
