<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class EventType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventType")
 */
class EventType implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("EventType"))
            ->addProperty("name", $this->_name)
            ->addProperty("version", $this->_version)
            ->addProperty("id", $this->_id)
            ;
    }
}
