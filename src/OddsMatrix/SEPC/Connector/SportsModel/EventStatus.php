<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class EventStatus
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventStatus")
 */
class EventStatus
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;
}