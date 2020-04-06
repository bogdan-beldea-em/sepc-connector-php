<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Request;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SDQLUpdateDataResumeRequest
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Request
 *
 * @Serializer\XmlRoot(name="UpdateDataResumeRequest")
 */
class SDQLUpdateDataResumeRequest
{
    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("subscriptionId")
    * @Serializer\XmlAttribute()
    */
    private $_subscriptionId;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("subscriptionSpecificationName")
    * @Serializer\XmlAttribute()
    */
    private $_subscriptionSpecificationName;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("subscriptionChecksum")
    * @Serializer\XmlAttribute()
    */
    private $_subscriptionChecksum;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("lastBatchUuid")
    * @Serializer\XmlAttribute()
    */
    private $_lastBatchUuid;

    /**
     * SDQLUpdateDataResumeRequest constructor.
     * @param string|null $_subscriptionId
     * @param string|null $_subscriptionSpecificationName
     * @param string|null $_subscriptionChecksum
     * @param string|null $_lastBatchUuid
     */
    public function __construct(?string $_subscriptionId, ?string $_subscriptionSpecificationName, ?string $_subscriptionChecksum, ?string $_lastBatchUuid)
    {
        $this->_subscriptionId = $_subscriptionId;
        $this->_subscriptionSpecificationName = $_subscriptionSpecificationName;
        $this->_subscriptionChecksum = $_subscriptionChecksum;
        $this->_lastBatchUuid = $_lastBatchUuid;
    }

}