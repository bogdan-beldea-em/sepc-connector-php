<?php


namespace OM\OddsMatrix\SEPC\Connector;


class SEPCBasicConnectionState implements SEPCConnectionStateInterface
{
    /**
     * @var string
     */
    private $_subscriptionId;

    /**
     * @var string
     */
    private $_subscriptionSpecificationName;

    /**
     * @var string
     */
    private $_subscriptionChecksum;

    /**
     * @var string
     */
    private $_host;

    /**
     * @var int
     */
    private $_port;

    /**
     * @var bool
     */
    private $_initialDataDumpComplete = false;

    /**
     * @var string
     */
    private $_lastBatchUuid;

    /**
     * @return string
     */
    public function getSubscriptionId(): string
    {
        return $this->_subscriptionId;
    }

    /**
     * @param string $subscriptionId
     * @return SEPCBasicConnectionState
     */
    public function setSubscriptionId(string $subscriptionId): SEPCBasicConnectionState
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
     * @return SEPCBasicConnectionState
     */
    public function setSubscriptionSpecificationName(string $subscriptionSpecificationName): SEPCBasicConnectionState
    {
        $this->_subscriptionSpecificationName = $subscriptionSpecificationName;
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
     * @return SEPCBasicConnectionState
     */
    public function setHost(string $host): SEPCBasicConnectionState
    {
        $this->_host = $host;
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
     * @return SEPCBasicConnectionState
     */
    public function setPort(int $port): SEPCBasicConnectionState
    {
        $this->_port = $port;
        return $this;
    }

    /**
     * @param bool $initialDataDumpComplete
     */
    public function setInitialDataDumpComplete(bool $initialDataDumpComplete): void
    {
        $this->_initialDataDumpComplete = $initialDataDumpComplete;
    }

    /**
     * @return bool
     */
    public function isInitialDataDumpComplete(): bool
    {
        return $this->_initialDataDumpComplete;
    }

    /**
     * @return string
     */
    public function getSubscriptionChecksum(): string
    {
        return $this->_subscriptionChecksum;
    }

    /**
     * @param string $subscriptionChecksum
     * @return SEPCBasicConnectionState
     */
    public function setSubscriptionChecksum(string $subscriptionChecksum): SEPCBasicConnectionState
    {
        $this->_subscriptionChecksum = $subscriptionChecksum;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastBatchUuid(): string
    {
        return $this->_lastBatchUuid;
    }

    /**
     * @param string $lastBatchUuid
     * @return SEPCBasicConnectionState
     */
    public function setLastBatchUuid(string $lastBatchUuid): SEPCBasicConnectionState
    {
        $this->_lastBatchUuid = $lastBatchUuid;
        return $this;
    }
}