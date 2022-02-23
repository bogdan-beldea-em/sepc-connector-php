<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class BettingOfferStatus
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="BettingOfferStatus")
 */
class BettingOfferStatus implements Stringable
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
        return (new ToStringBuilder("BettingOfferStatus"))
            ->addProperty("id", $this->_id)
            ->addProperty("id", $this->_version)
            ->addProperty("id", $this->_name)
            ->addProperty("id", $this->_description)
            ->addProperty("id", $this->_isAvailable);
    }
}
