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
    use IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("providerId")
    * @Serializer\XmlAttribute()
    */
    private $_providerId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("eventId")
    * @Serializer\XmlAttribute()
    */
    private $_eventId;

    /**
    * @var \DateTime
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("startTime")
    * @Serializer\XmlAttribute()
    */
    private $_startTime;

    /**
    * @var \DateTime
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("endTime")
    * @Serializer\XmlAttribute()
    */
    private $_endTime;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("timeQualityRank")
    * @Serializer\XmlAttribute()
    */
    private $_timeQualityRank;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("offersLiveOdds")
    * @Serializer\XmlAttribute()
    */
    private $_offersLiveOdds;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("offersLiveTV")
    * @Serializer\XmlAttribute()
    */
    private $_offersLiveTV;

    /**
     * @return int
     */
    public function getProviderId(): int
    {
        return $this->_providerId;
    }

    /**
     * @return int
     */
    public function getEventId(): int
    {
        return $this->_eventId;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime(): \DateTime
    {
        return $this->_startTime;
    }

    /**
     * @return \DateTime
     */
    public function getEndTime(): \DateTime
    {
        return $this->_endTime;
    }

    /**
     * @return int
     */
    public function getTimeQualityRank(): int
    {
        return $this->_timeQualityRank;
    }

    /**
     * @return bool
     */
    public function isOffersLiveOdds(): bool
    {
        return $this->_offersLiveOdds;
    }

    /**
     * @return bool
     */
    public function isOffersLiveTV(): bool
    {
        return $this->_offersLiveTV;
    }

}
