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
    use ;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("batchId")
    * @Serializer\XmlAttribute()
    */
    private $_batchId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("batchesLeft")
    * @Serializer\XmlAttribute()
    */
    private $_batchesLeft;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("dumpComplete")
    * @Serializer\XmlAttribute()
    */
    private $_dumpComplete;

    /**
     * @return int|null
     */
    public function getBatchId(): ?int
    {
        return $this->_batchId;
    }

    /**
     * @return int|null
     */
    public function getBatchesLeft(): ?int
    {
        return $this->_batchesLeft;
    }

    /**
     * @return bool|null
     */
    public function isDumpComplete(): ?bool
    {
        return $this->_dumpComplete;
    }

}
