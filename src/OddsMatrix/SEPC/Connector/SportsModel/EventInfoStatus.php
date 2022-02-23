<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class EventInfoStatus
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="EventInfoStatus")
 */
class EventInfoStatus implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait, DescribedTrait;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isAvailable")
    * @Serializer\XmlAttribute()
    */
    private $_isAvailable;

    /**
     * @return bool|null
     */
    public function isAvailable(): ?bool
    {
        return $this->_isAvailable;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("EventInfoStatus"))
            ->addProperty("isAvailable", $this->_isAvailable)
            ->addProperty("id", $this->_id)
            ->addProperty("description", $this->_description)
            ->addProperty("name", $this->_name)
            ->addProperty("version", $this->_version)
            ;

    }
}
