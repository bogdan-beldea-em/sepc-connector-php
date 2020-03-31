<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Provider
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Provider")
 */
class Provider
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
    * @Serializer\SerializedName("isEnabled")
    * @Serializer\XmlAttribute()
    */
    private $_isEnabled;

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

}
