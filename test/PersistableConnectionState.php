<?php

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\SEPCConnectionStateInterface;


/**
 * Class PersistableConnectionState
 *
 * @Serializer\XmlRoot(name="PersistableConnectionState")
 */
class PersistableConnectionState implements SEPCConnectionStateInterface
{

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("subscriptionId")
     * @Serializer\XmlAttribute()
     */
    private $_subscriptionId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("subscriptionSpecificationName")
     * @Serializer\XmlAttribute()
     */
    private $_subscriptionSpecificationName;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("port")
     * @Serializer\XmlAttribute()
     */
    private $_port;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("host")
     * @Serializer\XmlAttribute()
     */
    private $_host;

    /**
     * @var bool
     *
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("initialDataDumpComplete")
     * @Serializer\XmlAttribute()
     */
    private $_initialDataDumpComplete = false;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("count")
     * @Serializer\XmlAttribute()
     */
    private $_count = 0;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lastBatchUuid")
     * @Serializer\XmlAttribute()
     */
    private $_lastBatchUuid;

    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("subscriptionChecksum")
     * @Serializer\XmlAttribute()
     */
    private $_subscriptionChecksum;

    /**
     * @var bool
     *
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("resumable")
     * @Serializer\XmlAttribute()
     */
    private $_resumable = false;

    /**
     * @param array|null $wrapped_obj
     */
    public function __construct(?array $wrapped_obj = null)
    {
        if (is_null($wrapped_obj)) {
            return;
        }

        $this->_subscriptionId = $wrapped_obj['subscriptionId'];
        $this->_subscriptionSpecificationName = $wrapped_obj['subscriptionSpecificationName'];
        $this->_host = $wrapped_obj['host'];
        $this->_port = $wrapped_obj['port'];
        $this->_initialDataDumpComplete = $wrapped_obj['initialDataDumpComplete'];
        $this->_count = $wrapped_obj['count'];
        $this->_lastBatchUuid = $wrapped_obj['lastBatchUuid'];
        $this->_subscriptionChecksum = $wrapped_obj['subscriptionChecksum'];
        $this->_resumable = $wrapped_obj['resumable'];
    }

    /**
     * @param array $wrapped_obj
     * @return PersistableConnectionState
     */
    public static function wrap(array $wrapped_obj): PersistableConnectionState
    {
        return new PersistableConnectionState($wrapped_obj);
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'subscriptionId' => $this->_subscriptionId,
            'subscriptionSpecificationName' => $this->_subscriptionSpecificationName,
            'host' => $this->_host,
            'port' => $this->_port,
            'initialDataDumpComplete' => $this->_initialDataDumpComplete,
            'count' => $this->_count,
            'lastBatchUuid' => $this->_lastBatchUuid,
            'subscriptionChecksum' => $this->_subscriptionChecksum,
            'resumable' => $this->_resumable
        ];
    }

    /**
     * @return string
     */
    public function getSubscriptionId(): string
    {
        return $this->_subscriptionId;
    }

    /**
     * @param string $subscriptionId
     * @return PersistableConnectionState
     */
    public function setSubscriptionId(string $subscriptionId): PersistableConnectionState
    {
        $this->_subscriptionId = $subscriptionId;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubscriptionSpecificationName(): string
    {
        return $this->_subscriptionSpecificationName;
    }

    /**
     * @param string $subscriptionSpecificationName
     * @return PersistableConnectionState
     */
    public function setSubscriptionSpecificationName(string $subscriptionSpecificationName): PersistableConnectionState
    {
        $this->_subscriptionSpecificationName = $subscriptionSpecificationName;
        return $this;
    }

    /**
     * @return int
     */
    public function getPort(): int
    {
        return $this->_port;
    }

    /**
     * @param int $port
     * @return PersistableConnectionState
     */
    public function setPort(int $port): PersistableConnectionState
    {
        $this->_port = $port;
        return $this;
    }

    /**
     * @return string
     */
    public function getHost(): string
    {
        return $this->_host;
    }

    /**
     * @param string $host
     * @return PersistableConnectionState
     */
    public function setHost(string $host): PersistableConnectionState
    {
        $this->_host = $host;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInitialDataDumpComplete(): bool
    {
        return $this->_initialDataDumpComplete;
    }

    /**
     * @param bool $initialDataDumpComplete
     * @return PersistableConnectionState
     */
    public function setInitialDataDumpComplete(bool $initialDataDumpComplete): PersistableConnectionState
    {
        $this->_initialDataDumpComplete = $initialDataDumpComplete;
        return $this;
    }

    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->_count;
    }

    /**
     * @param int $count
     * @return PersistableConnectionState
     */
    public function setCount(int $count): PersistableConnectionState
    {
        $this->_count = $count;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastBatchUuid(): ?string
    {
        return $this->_lastBatchUuid;
    }

    /**
     * @param string|null $lastBatchUuid
     * @return PersistableConnectionState
     */
    public function setLastBatchUuid(?string $lastBatchUuid): PersistableConnectionState
    {
        $this->_lastBatchUuid = $lastBatchUuid;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSubscriptionChecksum(): ?string
    {
        return $this->_subscriptionChecksum;
    }

    /**
     * @param string|null $subscriptionChecksum
     * @return PersistableConnectionState
     */
    public function setSubscriptionChecksum(?string $subscriptionChecksum): PersistableConnectionState
    {
        $this->_subscriptionChecksum = $subscriptionChecksum;
        return $this;

    }

    /**
     * @return bool
     */
    public function isResumable(): bool
    {
        return $this->_resumable;
    }

    /**
     * @param bool $resumable
     * @return PersistableConnectionState
     */
    public function setResumable(bool $resumable): PersistableConnectionState
    {
        $this->_resumable = $resumable;
        return $this;
    }
}