<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class EventPartDefaultUsage
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventPartDefaultUsage")
 */
class EventPartDefaultUsage
{
    use IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("parentEventId")
    * @Serializer\XmlAttribute()
    */
    private $_parentEventId;

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
    * @Serializer\SerializedName("rootPartId")
    * @Serializer\XmlAttribute()
    */
    private $_rootPartId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("sportId")
    * @Serializer\XmlAttribute()
    */
    private $_sportId;

    /**
     * @return int
     */
    public function getParentEventId(): int
    {
        return $this->_parentEventId;
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
    public function getRootPartId(): int
    {
        return $this->_rootPartId;
    }

    /**
     * @return int
     */
    public function getSportId(): int
    {
        return $this->_sportId;
    }
}