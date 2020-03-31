<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ProviderEventRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="ProviderEventRelation")
 */
class ProviderEventRelation
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("providerId")
    * @Serializer\XmlAttribute()
    */
    private $_providerId;

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
    * @Serializer\SerializedName("startTime")
    * @Serializer\XmlAttribute()
    */
    private $_startTime;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("timeQualityRank")
    * @Serializer\XmlAttribute()
    */
    private $_timeQualityRank;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("offersLiveOdds")
    * @Serializer\XmlAttribute()
    */
    private $_offersLiveOdds;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("offersLiveTV")
    * @Serializer\XmlAttribute()
    */
    private $_offersLiveTV;

    /**
    * @var \DateTime|null
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("endTime")
    * @Serializer\XmlAttribute()
    */
    private $_endTime;

    /**
     * @return int|null
     */
    public function getProviderId(): ?int
    {
        return $this->_providerId;
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
    public function getStartTime(): ?string
    {
        return $this->_startTime;
    }

    /**
     * @return int|null
     */
    public function getTimeQualityRank(): ?int
    {
        return $this->_timeQualityRank;
    }

    /**
     * @return bool|null
     */
    public function isOffersLiveOdds(): ?bool
    {
        return $this->_offersLiveOdds;
    }

    /**
     * @return bool|null
     */
    public function isOffersLiveTV(): ?bool
    {
        return $this->_offersLiveTV;
    }

    /**
     * @return \DateTime|null
     */
    public function getEndTime(): ?\DateTime
    {
        return $this->_endTime;
    }

}
