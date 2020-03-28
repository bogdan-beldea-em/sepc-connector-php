<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class EventTemplate
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventTemplate")
 */
class EventTemplate
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("eventTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_eventTypeId;

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
    * @Serializer\SerializedName("categoryId")
    * @Serializer\XmlAttribute()
    */
    private $_categoryId;

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
     * @return int
     */
    public function getEventTypeId(): int
    {
        return $this->_eventTypeId;
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
    public function getCategoryId(): int
    {
        return $this->_categoryId;
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

}
