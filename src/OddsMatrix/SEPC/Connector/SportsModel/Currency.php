<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Currency
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot("Currency")
 */
class Currency
{
    use IdentifiableModelTrait, NamedTrait, VersionedTrait;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("code")
     * @Serializer\XmlAttribute()
     */
    private $_code;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->_code;
    }
}