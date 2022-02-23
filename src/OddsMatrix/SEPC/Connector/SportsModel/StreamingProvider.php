<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class StreamingProvider
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="StreamingProvider")
 */
class StreamingProvider implements Stringable
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

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("StreamingProvider"))
            ->addProperty("name", $this->_name)
            ->addProperty("id", $this->_id)
            ->addProperty("version", $this->_version)
            ->addProperty("urlTemplate", $this->_urlTemplate)
            ->addProperty("note", $this->_note)
            ;
    }
}
