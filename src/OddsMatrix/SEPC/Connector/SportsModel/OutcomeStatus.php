<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class OutcomeStatus
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="OutcomeStatus")
 */
class OutcomeStatus implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("OutcomeStatus"))
            ->addProperty("id", $this->_id)
            ->addProperty("version", $this->_version)
            ->addProperty("name", $this->_name)
            ->addProperty("description", $this->_description)
            ;
    }
}
