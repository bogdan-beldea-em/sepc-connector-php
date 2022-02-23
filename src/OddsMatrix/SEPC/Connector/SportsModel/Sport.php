<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class Sport
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Sport")
 */
class Sport
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("parentId")
    * @Serializer\XmlAttribute()
    */
    private $_parentId;

    /**
     * @return int|null
     */
    public function getParentId(): ?int
    {
        return $this->_parentId;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("Sport"))
            ->addProperty("name", $this->_name)
            ->addProperty("version", $this->_version)
            ->addProperty("id", $this->_id)
            ->addProperty("parentId", $this->_parentId)
            ->addProperty("description", $this->_description)
            ;
    }
}
