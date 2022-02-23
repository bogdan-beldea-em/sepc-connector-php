<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class EventPartDefaultUsage
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventPartDefaultUsage")
 */
class EventPartDefaultUsage implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("parentEventId")
    * @Serializer\XmlAttribute()
    */
    private $_parentEventId;

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
    * @Serializer\SerializedName("rootPartId")
    * @Serializer\XmlAttribute()
    */
    private $_rootPartId;

    /**
     * @return int|null
     */
    public function getParentEventId(): ?int
    {
        return $this->_parentEventId;
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
    public function getRootPartId(): ?int
    {
        return $this->_rootPartId;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("EventPartDefaultUsage"))
            ->addProperty("sportId", $this->_sportId)
            ->addProperty("eventTypeId", $this->_eventTypeId)
            ->addProperty("rootPartId", $this->_rootPartId)
            ->addProperty("parentEventId", $this->_parentEventId)
            ->addProperty("version", $this->_version)
            ->addProperty("id", $this->_id)
            ;

    }
}
