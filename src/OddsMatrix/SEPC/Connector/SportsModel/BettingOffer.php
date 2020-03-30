<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class BettingOffer
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="BettingOffer")
 */
class BettingOffer
{
    use IdentifiableModelTrait, VersionedTrait, TypedTrait, UpdateTimeTrait;

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
    * @Serializer\SerializedName("sourceId")
    * @Serializer\XmlAttribute()
    */
    private $_sourceId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("outcomeId")
    * @Serializer\XmlAttribute()
    */
    private $_outcomeId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("bettingTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_bettingTypeId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("statusId")
    * @Serializer\XmlAttribute()
    */
    private $_statusId;

    /**
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isLive")
    * @Serializer\XmlAttribute()
    */
    private $_isLive;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("odds")
    * @Serializer\XmlAttribute()
    */
    private $_odds;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("multiplicity")
    * @Serializer\XmlAttribute()
    */
    private $_multiplicity;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("couponKey")
    * @Serializer\XmlAttribute()
    */
    private $_couponKey;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("slotNum")
    * @Serializer\XmlAttribute()
    */
    private $_slotNum;

    /**
    * @var \DateTime
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("lastChangedTime")
    * @Serializer\XmlAttribute()
    */
    private $_lastChangedTime;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("volume")
    * @Serializer\XmlAttribute()
    */
    private $_volume;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("volumeCurrencyId")
    * @Serializer\XmlAttribute()
    */
    private $_volumeCurrencyId;

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
    public function getSourceId(): int
    {
        return $this->_sourceId;
    }

    /**
     * @return int
     */
    public function getOutcomeId(): int
    {
        return $this->_outcomeId;
    }

    /**
     * @return int
     */
    public function getBettingTypeId(): int
    {
        return $this->_bettingTypeId;
    }

    /**
     * @return int
     */
    public function getStatusId(): int
    {
        return $this->_statusId;
    }

    /**
     * @return bool
     */
    public function isLive(): bool
    {
        return $this->_isLive;
    }

    /**
     * @return string
     */
    public function getOdds(): string
    {
        return $this->_odds;
    }

    /**
     * @return int
     */
    public function getMultiplicity(): int
    {
        return $this->_multiplicity;
    }

    /**
     * @return string
     */
    public function getCouponKey(): string
    {
        return $this->_couponKey;
    }

    /**
     * @return int
     */
    public function getSlotNum(): int
    {
        return $this->_slotNum;
    }

    /**
     * @return \DateTime
     */
    public function getLastChangedTime(): \DateTime
    {
        return $this->_lastChangedTime;
    }

    /**
     * @return string
     */
    public function getVolume(): string
    {
        return $this->_volume;
    }

    /**
     * @return int
     */
    public function getVolumeCurrencyId(): int
    {
        return $this->_volumeCurrencyId;
    }

}
