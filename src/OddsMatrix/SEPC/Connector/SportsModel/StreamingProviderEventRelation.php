<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class StreamingProviderEventRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="StreamingProviderEventRelation")
 */
class StreamingProviderEventRelation
{
    use IdentifiableModelTrait, VersionedTrait, TypedTrait, UpdateTimeTrait;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("streamingProviderId")
    * @Serializer\XmlAttribute()
    */
    private $_streamingProviderId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("eventId")
    * @Serializer\XmlAttribute()
    */
    private $_eventId;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("channel")
    * @Serializer\XmlAttribute()
    */
    private $_channel;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("language")
    * @Serializer\XmlAttribute()
    */
    private $_language;

    /**
     * @return int
     */
    public function getStreamingProviderId(): int
    {
        return $this->_streamingProviderId;
    }

    /**
     * @return int
     */
    public function getEventId(): int
    {
        return $this->_eventId;
    }

    /**
     * @return string
     */
    public function getChannel(): string
    {
        return $this->_channel;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->_language;
    }

}
