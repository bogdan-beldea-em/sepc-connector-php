<?php

class EnvVarProvider
{
    private $connectionStatePathEnvVarName = "SEPC_CONNECTION_STATE_PATH";
    private $subscriptionSpecEnvVarName = 'SEPC_SUBSCRIPTION_SPECIFICATION_NAME';
    private $pushEndpointEnvVarName = 'SEPC_PUSH_ENDPOINT';
    private $pullEndpointEnvVarName = 'SEPC_PULL_ENDPOINT';
    private $pushPortEnvVarName = 'SEPC_PUSH_PORT';
    private $pullPortEnvVarName = 'SEPC_PULL_PORT';

    /**
     * @return string
     */
    public function getConnectionStatePath(): string
    {
        return $this->getValue($this->connectionStatePathEnvVarName);
    }

    /**
     * @return string
     */
    public function getSubscriptionSpecificationName(): string
    {
        return $this->getValue($this->subscriptionSpecEnvVarName);
    }

    /**
     * @return string
     */
    public function getPushEndpoint(): string
    {
        return $this->getValue($this->pushEndpointEnvVarName);
    }

    /**
     * @return string
     */
    public function getPullEndpoint(): string
    {
        return $this->getValue($this->pullEndpointEnvVarName);
    }

    /**
     * @return int
     */
    public function getPushPort(): int
    {
        $stringValue = $this->getValue($this->pushPortEnvVarName);
        $intValue = \OM\OddsMatrix\SEPC\Connector\Util\ParserUtil::parseInt($stringValue);

        if (is_null($intValue)) {
            $this->crashWrongFormat($this->pushPortEnvVarName, "int");
        }

        return $intValue;
    }

    /**
     * @return int
     */
    public function getPullPort(): int
    {
        $stringValue = $this->getValue($this->pullPortEnvVarName);
        $intValue = \OM\OddsMatrix\SEPC\Connector\Util\ParserUtil::parseInt($stringValue);

        if (is_null($intValue)) {
            $this->crashWrongFormat($this->pullPortEnvVarName, "int");
        }

        return $intValue;
    }

    /**
     * @param string $varName
     * @return string
     */
    private function getValue(string $varName): string
    {
        $value = getenv($varName);
        if (is_null($value) || '' == $value) {
            echo "FATAL ERROR: Environment value $varName is required\n";
            die;
        }

        return $value;
    }

    /**
     * @param string $varName
     * @param string $requiredFormat
     */
    private function crashWrongFormat(string $varName, string $requiredFormat): void
    {
        echo "$varName is required to be a $requiredFormat\n";
        die;
    }
}