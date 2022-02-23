<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class EventPart
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventPart")
 */
class EventPart implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("orderNum")
    * @Serializer\XmlAttribute()
    */
    private $_orderNum;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isDrawPossible")
    * @Serializer\XmlAttribute()
    */
    private $_isDrawPossible;

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
    public function getOrderNum(): ?int
    {
        return $this->_orderNum;
    }

    /**
     * @return bool|null
     */
    public function isDrawPossible(): ?bool
    {
        return $this->_isDrawPossible;
    }

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
        return (new ToStringBuilder("EventPart"))
            ->addProperty("version", $this->_version)
            ->addProperty("orderNum", $this->_orderNum)
            ->addProperty("description", $this->_description)
            ->addProperty("id", $this->_id)
            ->addProperty("isDrawPossible", $this->_isDrawPossible)
            ->addProperty("name", $this->_name)
            ->addProperty("parentId", $this->_parentId)
            ;

    }
}
