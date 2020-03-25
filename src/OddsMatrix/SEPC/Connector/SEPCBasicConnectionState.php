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
}