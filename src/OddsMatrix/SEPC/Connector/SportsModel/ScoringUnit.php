<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class ScoringUnit
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="ScoringUnit")
 */
class ScoringUnit
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("ScoringUnit"))
            ->addProperty("id", $this->_id)
            ->addProperty("name", $this->_name)
            ->addProperty("version", $this->_version)
            ->addProperty("description", $this->_description)
            ;
    }
}
