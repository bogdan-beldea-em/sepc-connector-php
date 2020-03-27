<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class StreamingProvider
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="StreamingProvider")
 */
class StreamingProvider
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("urlTemplate")
    * @Serializer\XmlAttribute()
    */
    private $_urlTemplate;

    /**
     * @return string
     */
    public function getUrlTemplate(): string
    {
        return $this->_urlTemplate;
    }
}