<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ParticipantRelationType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="ParticipantRelationType")
 */
class ParticipantRelationType
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;
}