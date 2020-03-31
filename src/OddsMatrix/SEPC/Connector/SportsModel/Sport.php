<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

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

}
