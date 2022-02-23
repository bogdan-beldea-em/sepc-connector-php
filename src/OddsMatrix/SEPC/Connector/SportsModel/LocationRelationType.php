<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class LocationRelationType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="LocationRelationType")
 */
class LocationRelationType implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("LocationRelationType"))
            ->addProperty("version", $this->_version)
            ->addProperty("name", $this->_name)
            ->addProperty("id", $this->_id)
            ;
    }
}
