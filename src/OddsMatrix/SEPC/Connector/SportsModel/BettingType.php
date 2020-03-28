<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class BettingType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="BettingType")
 */
class BettingType
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;

}
