<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class LocationRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="LocationRelation")
 */
class LocationRelation implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("typeId")
    * @Serializer\XmlAttribute()
    */
    private $_typeId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("fromLocationId")
    * @Serializer\XmlAttribute()
    */
    private $_fromLocationId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("toLocationId")
    * @Serializer\XmlAttribute()
    */
    private $_toLocationId;

    /**
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->_typeId;
    }

    /**
     * @return int|null
     */
    public function getFromLocationId(): ?int
    {
        return $this->_fromLocationId;
    }

    /**
     * @return int|null
     */
    public function getToLocationId(): ?int
    {
        return $this->_toLocationId;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("LocationRelation"))
            ->addProperty("version", $this->_version)
            ->addProperty("fromLocationId", $this->_fromLocationId)
            ->addProperty("toLocationId", $this->_toLocationId)
            ->addProperty("typeId", $this->_typeId)
            ->addProperty("id", $this->_id)
            ;
    }
}
