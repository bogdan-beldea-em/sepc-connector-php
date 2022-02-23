<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class EntityType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EntityType")
 */
class EntityType implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("EntityType"))
            ->addProperty("id", $this->_id)
            ->addProperty("version", $this->_version)
            ->addProperty("name", $this->_name);
    }
}
