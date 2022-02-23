<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class BettingTypeUsage
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="BettingTypeUsage")
 */
class BettingTypeUsage implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("bettingTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_bettingTypeId;

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
    * @Serializer\SerializedName("eventPartId")
    * @Serializer\XmlAttribute()
    */
    private $_eventPartId;

    /**
     * @return int|null
     */
    public function getBettingTypeId(): ?int
    {
        return $this->_bettingTypeId;
    }

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
    public function getEventPartId(): ?int
    {
        return $this->_eventPartId;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("BettingTypeUsage"))
            ->addProperty("id", $this->_id)
            ->addProperty("version", $this->_version)
            ->addProperty("bettingTypeId", $this->_bettingTypeId)
            ->addProperty("eventTypeId", $this->_eventTypeId)
            ->addProperty("sportId", $this->_sportId)
            ->addProperty("eventPartId", $this->_eventPartId);
    }
}
