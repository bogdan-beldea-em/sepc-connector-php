<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class Currency
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Currency")
 */
class Currency implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("code")
    * @Serializer\XmlAttribute()
    */
    private $_code;

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->_code;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("Currency"))
            ->addProperty("id", $this->_id)
            ->addProperty("version", $this->_version)
            ->addProperty("name", $this->_name)
            ->addProperty("code", $this->_code);
    }
}
