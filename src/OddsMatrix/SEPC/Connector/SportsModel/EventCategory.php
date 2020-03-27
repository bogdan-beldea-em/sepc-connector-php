<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class EventCategory
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventCategory")
 */
class EventCategory
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

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
    public function getSportId(): int
    {
        return $this->_sportId;
    }
}