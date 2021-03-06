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
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("urlTemplate")
    * @Serializer\XmlAttribute()
    */
    private $_urlTemplate;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("note")
    * @Serializer\XmlAttribute()
    */
    private $_note;

    /**
     * @return string|null
     */
    public function getUrlTemplate(): ?string
    {
        return $this->_urlTemplate;
    }

    /**
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->_note;
    }
}
