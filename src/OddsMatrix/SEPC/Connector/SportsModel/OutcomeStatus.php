<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class OutcomeStatus
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="OutcomeStatus")
 */
class OutcomeStatus
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;
}