<?php


namespace OM\OddsMatrix\SEPC\Connector;


/**
 * Interface SEPCConnectionStateInterface
 * @package OM\OddsMatrix\SEPC\Connector
 */
interface SEPCConnectionStateInterface
{
    /**
     * @return string
     */
    public function getSubscriptionId(): string;

    /**
     * @param string $id
     * @return SEPCConnectionStateInterface
     */
    public function setSubscriptionId(string $id);

    /**
     * @return string
     */
    public function getSubscriptionSpecificationName(): string;

    /**
     * @param string $subscriptionSpecificationName
     * @return SEPCConnectionStateInterface
     */
    public function setSubscriptionSpecificationName(string $subscriptionSpecificationName);

    /**
     * @param int $port
     * @return SEPCConnectionStateInterface
     */
    public function setPort(int $port);

    /**
     * @return int
     */
    public function getPort(): ?int;

    /**
     * @param string $host
     * @return SEPCConnectionStateInterface
     */
    public function setHost(string $host);

    /**
     * @return string
     */
    public function getHost(): ?string;

    /**
     * @return bool|null
     */
    public function isInitialDataDumpComplete(): ?bool;

    /**
     * @param bool $initialDataComplete
     * @return mixed
     */
    public function setInitialDataDumpComplete(bool $initialDataComplete);

    /**
     * @return string|null
     */
    public function getSubscriptionChecksum(): ?string;

    /**
     * @param string $subscriptionChecksum
     * @return mixed
     */
    public function setSubscriptionChecksum(string $subscriptionChecksum);

    /**
     * @return string|null
     */
    public function getLastBatchUuid(): ?string;

    /**
     * @param string $uuid
     * @return mixed
     */
    public function setLastBatchUuid(string $uuid);

    /**
     * @return bool
     */
    public function isResumable(): bool;

    /**
     * @param bool $resumable
     * @return mixed
     */
    public function setResumable(bool $resumable);
}