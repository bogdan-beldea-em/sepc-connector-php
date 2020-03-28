<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class BettingTypeUsage
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="BettingTypeUsage")
 */
class BettingTypeUsage
{
    use IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("bettingTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_bettingTypeId;

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
    * @Serializer\SerializedName("eventPartId")
    * @Serializer\XmlAttribute()
    */
    private $_eventPartId;

    /**
     * @return int
     */
    public function getBettingTypeId(): int
    {
        return $this->_bettingTypeId;
    }

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
    public function getEventPartId(): int
    {
        return $this->_eventPartId;
    }

}
