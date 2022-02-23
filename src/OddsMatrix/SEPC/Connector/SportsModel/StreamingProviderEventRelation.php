<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class StreamingProviderEventRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="StreamingProviderEventRelation")
 */
class StreamingProviderEventRelation implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("streamingProviderId")
    * @Serializer\XmlAttribute()
    */
    private $_streamingProviderId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("eventId")
    * @Serializer\XmlAttribute()
    */
    private $_eventId;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("channel")
    * @Serializer\XmlAttribute()
    */
    private $_channel;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("language")
    * @Serializer\XmlAttribute()
    */
    private $_language;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("note")
    * @Serializer\XmlAttribute()
    */
    private $_note;

    /**
     * @return int|null
     */
    public function getStreamingProviderId(): ?int
    {
        return $this->_streamingProviderId;
    }

    /**
     * @return int|null
     */
    public function getEventId(): ?int
    {
        return $this->_eventId;
    }

    /**
     * @return string|null
     */
    public function getChannel(): ?string
    {
        return $this->_channel;
    }

    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->_language;
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
        return (new ToStringBuilder("StreamingProviderEventRelation"))
            ->addProperty("channel", $this->_channel)
            ->addProperty("streamingProviderId", $this->_streamingProviderId)
            ->addProperty("language", $this->_language)
            ->addProperty("version", $this->_version)
            ->addProperty("eventId", $this->_eventId)
            ->addProperty("type", $this->_type)
            ->addProperty("id", $this->_id)
            ->addProperty("note", $this->_note)
            ;
    }
}
