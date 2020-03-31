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

}
