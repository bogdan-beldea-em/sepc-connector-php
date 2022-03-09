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
     * @return array
     */
    public function toArray(): array
    {
        return [
            'subscriptionId' => $this->_subscriptionId,
            'subscriptionSpecificationName' => $this->_subscriptionSpecificationName,
            'subscriptionChecksum' => $this->_subscriptionChecksum,
            'lastBatchUuid' => $this->_lastBatchUuid,
        ];
    }

    /**
     * SDQLUpdateDataResumeRequest constructor.
     * @param string|null $subscriptionId
     * @param string|null $subscriptionSpecificationName
     * @param string|null $subscriptionChecksum
     * @param string|null $lastBatchUuid
     */
    public function __construct(?string $subscriptionId, ?string $subscriptionSpecificationName, ?string $subscriptionChecksum, ?string $lastBatchUuid)
    {
        $this->_subscriptionId = $subscriptionId;
        $this->_subscriptionSpecificationName = $subscriptionSpecificationName;
        $this->_subscriptionChecksum = $subscriptionChecksum;
        $this->_lastBatchUuid = $lastBatchUuid;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "SDQLUpdateDataResumeRequest[subId: " . $this->_subscriptionId . " checksum: " . $this->_subscriptionChecksum . " batchUUID: " . $this->_lastBatchUuid . "]";
    }
}