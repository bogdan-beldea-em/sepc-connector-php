<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class EventParticipantInfoType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventParticipantInfoType")
 */
class EventParticipantInfoType
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;

}
