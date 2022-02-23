<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class EntityProperty
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EntityProperty")
 */
class EntityProperty implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;

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
    * @Serializer\SerializedName("entityTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_entityTypeId;

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
    public function getEntityTypeId(): ?int
    {
        return $this->_entityTypeId;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("EntityProperty"))
            ->addProperty("id", $this->_id)
            ->addProperty("version", $this->_version)
            ->addProperty("name", $this->_name)
            ->addProperty("description", $this->_description)
            ->addProperty("typeId", $this->_typeId)
            ->addProperty("entityTypeId", $this->_entityTypeId);
    }
}
