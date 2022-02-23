<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class EventTemplate
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventTemplate")
 */
class EventTemplate implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("eventTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_eventTypeId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("sportId")
    * @Serializer\XmlAttribute()
    */
    private $_sportId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("categoryId")
    * @Serializer\XmlAttribute()
    */
    private $_categoryId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("venueId")
    * @Serializer\XmlAttribute()
    */
    private $_venueId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("rootPartId")
    * @Serializer\XmlAttribute()
    */
    private $_rootPartId;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("url")
    * @Serializer\XmlAttribute()
    */
    private $_url;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("parentId")
    * @Serializer\XmlAttribute()
    */
    private $_parentId;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasMatches")
    * @Serializer\XmlAttribute()
    */
    private $_hasMatches;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isBanned")
    * @Serializer\XmlAttribute()
    */
    private $_isBanned;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("note")
    * @Serializer\XmlAttribute()
    */
    private $_note;

    /**
     * @return int|null
     */
    public function getEventTypeId(): ?int
    {
        return $this->_eventTypeId;
    }

    /**
     * @return int|null
     */
    public function getSportId(): ?int
    {
        return $this->_sportId;
    }

    /**
     * @return int|null
     */
    public function getCategoryId(): ?int
    {
        return $this->_categoryId;
    }

    /**
     * @return int|null
     */
    public function getVenueId(): ?int
    {
        return $this->_venueId;
    }

    /**
     * @return int|null
     */
    public function getRootPartId(): ?int
    {
        return $this->_rootPartId;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->_url;
    }

    /**
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->_parentId;
    }

    /**
     * @return bool|null
     */
    public function isHasMatches(): ?bool
    {
        return $this->_hasMatches;
    }

    /**
     * @return bool|null
     */
    public function isBanned(): ?bool
    {
        return $this->_isBanned;
    }

    /**
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->_note;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("EventTemplate"))
            ->addProperty("name", $this->_name)
            ->addProperty("eventTypeId", $this->_eventTypeId)
            ->addProperty("id", $this->_id)
            ->addProperty("rootPartId", $this->_rootPartId)
            ->addProperty("hasMatches", $this->_hasMatches)
            ->addProperty("venueId", $this->_venueId)
            ->addProperty("isBanned", $this->_isBanned)
            ->addProperty("note", $this->_note)
            ->addProperty("version", $this->_version)
            ->addProperty("parentId", $this->_parentId)
            ->addProperty("url", $this->_url)
            ->addProperty("type", $this->_type)
            ->addProperty("categoryId", $this->_categoryId)
            ->addProperty("sportId", $this->_sportId)
            ;
    }
}
