<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class EventTemplate
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class EventTemplate implements Stringable
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
     * @return EventTemplate
     */
    public static function wrap(array $wrapped_obj): EventTemplate
    {
        return new EventTemplate($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getEventTypeId(): ?int
    {
        return $this->_wrapped_obj['eventTypeId'];
    }


    /**
     * @return int|null
     */
    public function getSportId(): ?int
    {
        return $this->_wrapped_obj['sportId'];
    }


    /**
     * @return int|null
     */
    public function getCategoryId(): ?int
    {
        return $this->_wrapped_obj['categoryId'];
    }


    /**
     * @return int|null
     */
    public function getVenueId(): ?int
    {
        return $this->_wrapped_obj['venueId'];
    }


    /**
     * @return int|null
     */
    public function getRootPartId(): ?int
    {
        return $this->_wrapped_obj['rootPartId'];
    }


    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->_wrapped_obj['url'];
    }


    /**
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->_wrapped_obj['parentId'];
    }


    /**
     * @return bool|null
     */
    public function isHasMatches(): ?bool
    {
        return $this->_wrapped_obj['hasMatches'];
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
