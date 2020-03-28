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
    use IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("collectorId")
    * @Serializer\XmlAttribute()
    */
    private $_collectorId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("providerId")
    * @Serializer\XmlAttribute()
    */
    private $_providerId;

    /**
    * @var \DateTime
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("lastCollectedTime")
    * @Serializer\XmlAttribute()
    */
    private $_lastCollectedTime;

    /**
    * @var \DateTime
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("lastUpdatedTime")
    * @Serializer\XmlAttribute()
    */
    private $_lastUpdatedTime;

    /**
     * @return int
     */
    public function getCollectorId(): int
    {
        return $this->_collectorId;
    }

    /**
     * @return int
     */
    public function getProviderId(): int
    {
        return $this->_providerId;
    }

    /**
     * @return \DateTime
     */
    public function getLastCollectedTime(): \DateTime
    {
        return $this->_lastCollectedTime;
    }

    /**
     * @return \DateTime
     */
    public function getLastUpdatedTime(): \DateTime
    {
        return $this->_lastUpdatedTime;
    }

}
