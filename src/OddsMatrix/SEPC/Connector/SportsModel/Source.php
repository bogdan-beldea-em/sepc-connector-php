<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Source
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Source")
 */
class Source
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

}
