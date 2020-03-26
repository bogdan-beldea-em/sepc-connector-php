<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class LocationRelationType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="LocationRelationType")
 */
class LocationRelationType
{
    use IdentifiableModelTrait, NamedTrait, VersionedTrait;
}