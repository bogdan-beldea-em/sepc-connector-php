<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class EventParticipantInfoType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventParticipantInfoType")
 */
class EventParticipantInfoType implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("EventParticipantInfoType"))
            ->addProperty("version", $this->_version)
            ->addProperty("id", $this->_id)
            ->addProperty("description", $this->_description)
            ->addProperty("name", $this->_name)
            ;

    }
}
