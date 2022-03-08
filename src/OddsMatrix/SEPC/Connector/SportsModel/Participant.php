<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class Participant
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class Participant implements Stringable
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
     * @return Participant
     */
    public static function wrap(array $wrapped_obj): Participant
    {
        return new Participant($wrapped_obj);
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
    public function getCountryId(): ?int
    {
        return $this->_wrapped_obj['countryId'];
    }


    /**
     * @return bool|null
     */
    public function isMale(): ?bool
    {
        return $this->_wrapped_obj['isMale'];
    }


    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->_wrapped_obj['firstName'];
    }


    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->_wrapped_obj['lastName'];
    }


    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->_wrapped_obj['url'];
    }


    /**
     * @return string|null
     */
    public function getShortName(): ?string
    {
        return $this->_wrapped_obj['shortName'];
    }


    /**
     * @return string|null
     */
    public function getLogoUrl(): ?string
    {
        return $this->_wrapped_obj['logoUrl'];
    }


    /**
     * @return bool|null
     */
    public function isBanned(): ?bool
    {
        return $this->_wrapped_obj['isBanned'];
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
