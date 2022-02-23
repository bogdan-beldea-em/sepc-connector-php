<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class BettingOffer
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="BettingOffer")
 */
class BettingOffer implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait, UpdateTimeTrait;

    /**
    * @var float|null
    *
    * @Serializer\Type("float")
    * @Serializer\SerializedName("odds")
    * @Serializer\XmlAttribute()
    */
    private $_odds;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("statusId")
    * @Serializer\XmlAttribute()
    */
    private $_statusId;

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
    * @Serializer\SerializedName("sourceId")
    * @Serializer\XmlAttribute()
    */
    private $_sourceId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("outcomeId")
    * @Serializer\XmlAttribute()
    */
    private $_outcomeId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("bettingTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_bettingTypeId;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isLive")
    * @Serializer\XmlAttribute()
    */
    private $_isLive;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("multiplicity")
    * @Serializer\XmlAttribute()
    */
    private $_multiplicity;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("couponKey")
    * @Serializer\XmlAttribute()
    */
    private $_couponKey;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("slotNum")
    * @Serializer\XmlAttribute()
    */
    private $_slotNum;

    /**
    * @var float|null
    *
    * @Serializer\Type("float")
    * @Serializer\SerializedName("volume")
    * @Serializer\XmlAttribute()
    */
    private $_volume;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("volumeCurrencyId")
    * @Serializer\XmlAttribute()
    */
    private $_volumeCurrencyId;

    /**
     * @return float|null
     */
    public function getOdds(): ?float
    {
        return $this->_odds;
    }

    /**
     * @return int|null
     */
    public function getStatusId(): ?int
    {
        return $this->_statusId;
    }

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
    public function getSourceId(): ?int
    {
        return $this->_sourceId;
    }

    /**
     * @return int|null
     */
    public function getOutcomeId(): ?int
    {
        return $this->_outcomeId;
    }

    /**
     * @return int|null
     */
    public function getBettingTypeId(): ?int
    {
        return $this->_bettingTypeId;
    }

    /**
     * @return bool|null
     */
    public function isLive(): ?bool
    {
        return $this->_isLive;
    }

    /**
     * @return int|null
     */
    public function getMultiplicity(): ?int
    {
        return $this->_multiplicity;
    }

    /**
     * @return string|null
     */
    public function getCouponKey(): ?string
    {
        return $this->_couponKey;
    }

    /**
     * @return int|null
     */
    public function getSlotNum(): ?int
    {
        return $this->_slotNum;
    }

    /**
     * @return float|null
     */
    public function getVolume(): ?float
    {
        return $this->_volume;
    }

    /**
     * @return string|null
     */
    public function getVolumeCurrencyId(): ?string
    {
        return $this->_volumeCurrencyId;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("BettingOffer"))
            ->addProperty("id", $this->_id)
            ->addProperty("id", $this->_version)
            ->addProperty("id", $this->_type)
            ->addProperty("id", $this->_odds)
            ->addProperty("id", $this->_statusId)
            ->addProperty("id", $this->_providerId)
            ->addProperty("id", $this->_sourceId)
            ->addProperty("id", $this->_outcomeId)
            ->addProperty("id", $this->_bettingTypeId)
            ->addProperty("id", $this->_isLive)
            ->addProperty("id", $this->_multiplicity);
    }
}
