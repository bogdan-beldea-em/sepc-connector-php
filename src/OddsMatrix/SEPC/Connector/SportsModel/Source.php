<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringUtil;

/**
 * Class Source
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Source")
 */
class Source implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait;

    /**
    * @var \DateTime|null
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("lastCollectedTime")
    * @Serializer\XmlAttribute()
    */
    private $_lastCollectedTime;

    /**
    * @var \DateTime|null
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("lastUpdatedTime")
    * @Serializer\XmlAttribute()
    */
    private $_lastUpdatedTime;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("collectorId")
    * @Serializer\XmlAttribute()
    */
    private $_collectorId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("providerId")
    * @Serializer\XmlAttribute()
    */
    private $_providerId;

    /**
     * @return \DateTime|null
     */
    public function getLastCollectedTime(): ?\DateTime
    {
        return $this->_lastCollectedTime;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastUpdatedTime(): ?\DateTime
    {
        return $this->_lastUpdatedTime;
    }

    /**
     * @return int|null
     */
    public function getCollectorId(): ?int
    {
        return $this->_collectorId;
    }

    /**
     * @return int|null
     */
    public function getProviderId(): ?int
    {
        return $this->_providerId;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("Source"))
            ->addProperty("id", $this->_id)
            ->addProperty("lastUpdatedTime", ToStringUtil::transformDate($this->_lastUpdatedTime))
            ->addProperty("collectorId", $this->_collectorId)
            ->addProperty("version", $this->_version)
            ->addProperty("type", $this->_type)
            ->addProperty("lastCollectedTime", ToStringUtil::transformDate($this->_lastCollectedTime))
            ->addProperty("providerId", $this->_providerId)
            ;
    }
}
