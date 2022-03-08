<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class ParticipantType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class ParticipantType implements Stringable
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
     * @return ParticipantType
     */
    public static function wrap(array $wrapped_obj): ParticipantType
    {
        return new ParticipantType($wrapped_obj);
    }


    /**
     * @return bool|null
     */
    public function isIndividual(): ?bool
    {
        return $this->_wrapped_obj['isIndividual'];
    }


    /**
     * @return bool|null
     */
    public function isHasName(): ?bool
    {
        return $this->_wrapped_obj['hasName'];
    }


    /**
     * @return bool|null
     */
    public function isHasFirstName(): ?bool
    {
        return $this->_wrapped_obj['hasFirstName'];
    }


    /**
     * @return bool|null
     */
    public function isHasLastName(): ?bool
    {
        return $this->_wrapped_obj['hasLastName'];
    }


    /**
     * @return bool|null
     */
    public function isHasShortName(): ?bool
    {
        return $this->_wrapped_obj['hasShortName'];
    }


    /**
     * @return bool|null
     */
    public function isHasIsMale(): ?bool
    {
        return $this->_wrapped_obj['hasIsMale'];
    }


    /**
     * @return bool|null
     */
    public function isHasBirthTime(): ?bool
    {
        return $this->_wrapped_obj['hasBirthTime'];
    }


    /**
     * @return bool|null
     */
    public function isHasCountry(): ?bool
    {
        return $this->_wrapped_obj['hasCountry'];
    }


    /**
     * @return bool|null
     */
    public function isHasRetirementTime(): ?bool
    {
        return $this->_wrapped_obj['hasRetirementTime'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
