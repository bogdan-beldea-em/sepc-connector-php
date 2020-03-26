<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class LocationRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="LocationRelation")
 */
class LocationRelation
{
    use IdentifiableModelTrait, VersionedTrait;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("typeId")
     * @Serializer\XmlAttribute()
     */
    private $_typeId;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("fromLocationId")
     * @Serializer\XmlAttribute()
     */
    private $_fromLocationId;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("toLocationId")
     * @Serializer\XmlAttribute()
     */
    private $_toLocationId;

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->_typeId;
    }

    /**
     * @return int
     */
    public function getFromLocationId(): int
    {
        return $this->_fromLocationId;
    }

    /**
     * @return int
     */
    public function getToLocationId(): int
    {
        return $this->_toLocationId;
    }
}