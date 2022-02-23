<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class Provider
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Provider")
 */
class Provider implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("locationId")
    * @Serializer\XmlAttribute()
    */
    private $_locationId;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("url")
    * @Serializer\XmlAttribute()
    */
    private $_url;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isBookmaker")
    * @Serializer\XmlAttribute()
    */
    private $_isBookmaker;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isBettingExchange")
    * @Serializer\XmlAttribute()
    */
    private $_isBettingExchange;

    /**
    * @var float|null
    *
    * @Serializer\Type("float")
    * @Serializer\SerializedName("bettingCommissionVACs")
    * @Serializer\XmlAttribute()
    */
    private $_bettingCommissionVACs;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("includeBettingVACs")
    * @Serializer\XmlAttribute()
    */
    private $_includeBettingVACs;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isLiveOddsApproved")
    * @Serializer\XmlAttribute()
    */
    private $_isLiveOddsApproved;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isNewsSource")
    * @Serializer\XmlAttribute()
    */
    private $_isNewsSource;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("requiresSettlement")
    * @Serializer\XmlAttribute()
    */
    private $_requiresSettlement;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isEnabled")
    * @Serializer\XmlAttribute()
    */
    private $_isEnabled;

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
    public function getLocationId(): ?int
    {
        return $this->_locationId;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->_url;
    }

    /**
     * @return bool|null
     */
    public function isBookmaker(): ?bool
    {
        return $this->_isBookmaker;
    }

    /**
     * @return bool|null
     */
    public function isBettingExchange(): ?bool
    {
        return $this->_isBettingExchange;
    }

    /**
     * @return float|null
     */
    public function getBettingCommissionVACs(): ?float
    {
        return $this->_bettingCommissionVACs;
    }

    /**
     * @return bool|null
     */
    public function isLiveOddsApproved(): ?bool
    {
        return $this->_isLiveOddsApproved;
    }

    /**
     * @return bool|null
     */
    public function isNewsSource(): ?bool
    {
        return $this->_isNewsSource;
    }

    /**
     * @return bool|null
     */
    public function isEnabled(): ?bool
    {
        return $this->_isEnabled;
    }

    /**
     * @return bool|null
     */
    public function isIncludeBettingVACs(): ?bool
    {
        return $this->_includeBettingVACs;
    }

    /**
     * @return bool|null
     */
    public function isRequiresSettlement(): ?bool
    {
        return $this->_requiresSettlement;
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
        return (new ToStringBuilder("Provider"))
            ->addProperty("url", $this->_url)
            ->addProperty("isNewsSource", $this->_isNewsSource)
            ->addProperty("includeBettingVACs", $this->_includeBettingVACs)
            ->addProperty("bettingCommissionVACs", $this->_bettingCommissionVACs)
            ->addProperty("note", $this->_note)
            ->addProperty("locationId", $this->_locationId)
            ->addProperty("version", $this->_version)
            ->addProperty("isBettingExchange", $this->_isBettingExchange)
            ->addProperty("isLiveOddsApproved", $this->_isLiveOddsApproved)
            ->addProperty("name", $this->_name)
            ->addProperty("requiresSettlement", $this->_requiresSettlement)
            ->addProperty("isBookmaker", $this->_isBookmaker)
            ->addProperty("isEnabled", $this->_isEnabled)
            ->addProperty("id", $this->_id)
            ;
    }
}
