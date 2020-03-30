<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class UpdateData
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="UpdateData")
 */
class UpdateData
{
    use EntitiesTrait;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("batchId")
     * @Serializer\XmlAttribute()
     */
    private $_batchId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("batchUuid")
     * @Serializer\XmlAttribute()
     */
    private $_batchUuid;

    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
     * @Serializer\SerializedName("createdTime")
     * @Serializer\XmlAttribute()
     */
    private $_createdTime;

    /**
     * @var EntitiesContainer
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SportsModel\EntitiesContainer")
     * @Serializer\XmlElement()
     */
    private $entities;

    /**
     * @return int
     */
    public function getBatchId(): int
    {
        return $this->_batchId;
    }
}