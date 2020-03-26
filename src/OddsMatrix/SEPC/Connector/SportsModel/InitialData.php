<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class InitialData
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="InitialData")
 */
class InitialData
{
    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("batchId")
     * @Serializer\XmlAttribute()
     */
    private $_batchId;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("batchesLeft")
     * @Serializer\XmlAttribute()
     */
    private $_batchesLeft;

    /**
     * @var bool
     *
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("dumpComplete")
     * @Serializer\XmlAttribute()
     */
    private $_dumpComplete;

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

    /**
     * @return int
     */
    public function getBatchesLeft(): int
    {
        return $this->_batchesLeft;
    }

    /**
     * @return bool
     */
    public function isDumpComplete(): bool
    {
        return $this->_dumpComplete;
    }

    /**
     * @return EntitiesContainer
     */
    public function getEntities(): EntitiesContainer
    {
        return $this->entities;
    }
}