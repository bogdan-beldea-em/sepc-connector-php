<?php


namespace OM\OddsMatrix\SEPC\Connector;


class SEPCCredentials
{
    /**
     * @var string
     */
    private $_subscriptionSpecificationName;

    /**
     * SEPCCredentials constructor.
     * @param string $_subscriptionSpecificationName
     */
    public function __construct(string $_subscriptionSpecificationName)
    {
        $this->_subscriptionSpecificationName = $_subscriptionSpecificationName;
    }

    /**
     * @return string
     */
    public function getSubscriptionSpecificationName()
    {
        return $this->_subscriptionSpecificationName;
    }
}