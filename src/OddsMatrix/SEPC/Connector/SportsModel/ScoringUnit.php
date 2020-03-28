<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ScoringUnit
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="ScoringUnit")
 */
class ScoringUnit
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;

}
