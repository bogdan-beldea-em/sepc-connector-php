<?php


namespace OM\OddsMatrix\SEPC\Connector;


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
    public function getPort(): int;

    /**
     * @param string $host
     * @return SEPCConnectionStateInterface
     */
    public function setHost(string $host);

    /**
     * @return string
     */
    public function getHost(): string;

    public function isInitialDataDumpComplete(): bool;

    public function setInitialDataDumpComplete(bool $initialDataComplete);
}