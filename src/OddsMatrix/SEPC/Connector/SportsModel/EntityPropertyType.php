<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class EntityPropertyType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EntityPropertyType")
 */
class EntityPropertyType
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

}
