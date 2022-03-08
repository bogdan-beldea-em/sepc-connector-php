<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use OM\OddsMatrix\SEPC\Connector\Util\DateTimeUtil;

/**
 * Class Event
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class Event implements Stringable
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
     * @return Event
     */
    public static function wrap(array $wrapped_obj): Event
    {
        return new Event($wrapped_obj);
    }


    /**
     * @return bool|null
     */
    public function isHasLiveStatus(): ?bool
    {
        return $this->_wrapped_obj['hasLiveStatus'];
    }


    /**
     * @return int|null
     */
    public function getStatusId(): ?int
    {
        return $this->_wrapped_obj['statusId'];
    }


    /**
     * @return string|null
     */
    public function getCurrentPartId(): ?string
    {
        return $this->_wrapped_obj['currentPartId'];
    }


    /**
     * @return bool|null
     */
    public function isComplete(): ?bool
    {
        return $this->_wrapped_obj['isComplete'];
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
    public function getSportId(): ?int
    {
        return $this->_wrapped_obj['sportId'];
    }


    /**
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->_wrapped_obj['parentId'];
    }


    /**
     * @return int|null
     */
    public function getParentPartId(): ?int
    {
        return $this->_wrapped_obj['parentPartId'];
    }


    /**
     * @return \DateTime|null
     */
    public function getStartTime(): ?\DateTime
    {
        return DateTimeUtil::stringToDateTime($this->_wrapped_obj['startTime']);
    }


    /**
     * @return \DateTime|null
     */
    public function getEndTime(): ?\DateTime
    {
        return DateTimeUtil::stringToDateTime($this->_wrapped_obj['endTime']);
    }


    /**
     * @return int|null
     */
    public function getDeleteTimeOffset(): ?int
    {
        return $this->_wrapped_obj['deleteTimeOffset'];
    }


    /**
     * @return int|null
     */
    public function getRootPartId(): ?int
    {
        return $this->_wrapped_obj['rootPartId'];
    }


    /**
     * @return int|null
     */
    public function getTemplateId(): ?int
    {
        return $this->_wrapped_obj['templateId'];
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
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->_wrapped_obj['url'];
    }


    /**
     * @return int|null
     */
    public function getPopularity(): ?int
    {
        return $this->_wrapped_obj['popularity'];
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
