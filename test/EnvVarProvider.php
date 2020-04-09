<?php

class EnvVarProvider
{
    private static $connectionStatePathEnvVarName = "SEPC_CONNECTION_STATE_PATH";
    private static $subscriptionSpecEnvVarName = 'SEPC_SUBSCRIPTION_SPECIFICATION_NAME';
    private static $pushEndpointEnvVarName = 'SEPC_PUSH_ENDPOINT';
    private static $pullEndpointEnvVarName = 'SEPC_PULL_ENDPOINT';
    private static $pushPortEnvVarName = 'SEPC_PUSH_PORT';
    private static $pullPortEnvVarName = 'SEPC_PULL_PORT';

    /**
     * @return string
     */
    public static function getConnectionStatePath(): string
    {
        return self::getValue(self::$connectionStatePathEnvVarName);
    }

    /**
     * @return string
     */
    public static function getSubscriptionSpecificationName(): string
    {
        return self::getValue(self::$subscriptionSpecEnvVarName);
    }

    /**
     * @return string
     */
    public static function getPushEndpoint(): string
    {
        return self::getValue(self::$pushEndpointEnvVarName);
    }

    /**
     * @return string
     */
    public static function getPullEndpoint(): string
    {
        return self::getValue(self::$pullEndpointEnvVarName);
    }

    /**
     * @return int
     */
    public static function getPushPort(): int
    {
        $stringValue = self::getValue(self::$pushPortEnvVarName);
        $intValue = \OM\OddsMatrix\SEPC\Connector\Util\ParserUtil::parseInt($stringValue);

        if (is_null($intValue)) {
            self::crashWrongFormat(self::$pushPortEnvVarName, "int");
        }

        return $intValue;
    }

    /**
     * @return int
     */
    public static function getPullPort(): int
    {
        $stringValue = self::getValue(self::$pullPortEnvVarName);
        $intValue = \OM\OddsMatrix\SEPC\Connector\Util\ParserUtil::parseInt($stringValue);

        if (is_null($intValue)) {
            self::crashWrongFormat(self::$pullPortEnvVarName, "int");
        }

        return $intValue;
    }

    /**
     * @param string $varName
     * @return string
     */
    private static function getValue(string $varName): string
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
    private static function crashWrongFormat(string $varName, string $requiredFormat): void
    {
        echo "$varName is required to be a $requiredFormat\n";
        die;
    }
}