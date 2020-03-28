<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Event
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Event")
 */
class Event
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("typeId")
    * @Serializer\XmlAttribute()
    */
    private $_typeId;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isComplete")
    * @Serializer\XmlAttribute()
    */
    private $_isComplete;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("sportId")
    * @Serializer\XmlAttribute()
    */
    private $_sportId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("templateId")
    * @Serializer\XmlAttribute()
    */
    private $_templateId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("categoryId")
    * @Serializer\XmlAttribute()
    */
    private $_categoryId;

    /**
    * @var \DateTime
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("startTime")
    * @Serializer\XmlAttribute()
    */
    private $_startTime;

    /**
    * @var \DateTime
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("endTime")
    * @Serializer\XmlAttribute()
    */
    private $_endTime;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("deleteTimeOffset")
    * @Serializer\XmlAttribute()
    */
    private $_deleteTimeOffset;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("venueId")
    * @Serializer\XmlAttribute()
    */
    private $_venueId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("statusId")
    * @Serializer\XmlAttribute()
    */
    private $_statusId;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasLiveStatus")
    * @Serializer\XmlAttribute()
    */
    private $_hasLiveStatus;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("rootPartId")
    * @Serializer\XmlAttribute()
    */
    private $_rootPartId;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("url")
    * @Serializer\XmlAttribute()
    */
    private $_url;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("popularity")
    * @Serializer\XmlAttribute()
    */
    private $_popularity;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("parentId")
    * @Serializer\XmlAttribute()
    */
    private $_parentId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("parentPartId")
    * @Serializer\XmlAttribute()
    */
    private $_parentPartId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("currentPartId")
    * @Serializer\XmlAttribute()
    */
    private $_currentPartId;

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->_typeId;
    }

    /**
     * @return bool
     */
    public function isComplete(): bool
    {
        return $this->_isComplete;
    }

    /**
     * @return int
     */
    public function getSportId(): int
    {
        return $this->_sportId;
    }

    /**
     * @return int
     */
    public function getTemplateId(): int
    {
        return $this->_templateId;
    }

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->_categoryId;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime(): \DateTime
    {
        return $this->_startTime;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime(): \DateTime
    {
        return $this->_endTime;
    }

    /**
     * @return int
     */
    public function getDeleteTimeOffset(): int
    {
        return $this->_deleteTimeOffset;
    }

    /**
     * @return int
     */
    public function getVenueId(): int
    {
        return $this->_venueId;
    }

    /**
     * @return int
     */
    public function getStatusId(): int
    {
        return $this->_statusId;
    }

    /**
     * @return bool
     */
    public function isHasLiveStatus(): bool
    {
        return $this->_hasLiveStatus;
    }

    /**
     * @return int
     */
    public function getRootPartId(): int
    {
        return $this->_rootPartId;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->_url;
    }

    /**
     * @return int
     */
    public function getPopularity(): int
    {
        return $this->_popularity;
    }

    /**
     * @return int
     */
    public function getParentId(): int
    {
        return $this->_parentId;
    }

    /**
     * @return int
     */
    public function getParentPartId(): int
    {
        return $this->_parentPartId;
    }

    /**
     * @return int
     */
    public function getCurrentPartId(): int
    {
        return $this->_currentPartId;
    }

}
