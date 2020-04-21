<?php


namespace OM\OddsMatrix\SEPC\Connector\Util;


use Psr\Log\LoggerInterface;

class LogUtil
{
    /**
     * @param LoggerInterface|null $logger
     * @param string $message
     */
    public static function logD(?LoggerInterface $logger, ?string $message): void
    {
        if (!is_null($logger) && !is_null($message)) {
            $logger->debug($message);
        }
    }

    /**
     * @param LoggerInterface|null $logger
     * @param string $message
     */
    public static function logW(?LoggerInterface $logger, string $message): void
    {
        if (!is_null($logger) && !is_null($message)) {
            $logger->warning($message);
        }
    }

    /**
     * @param LoggerInterface|null $logger
     * @param string $message
     */
    public static function logI(?LoggerInterface $logger, string $message): void
    {
        if (!is_null($logger) && !is_null($message)) {
            $logger->info($message);
        }
    }

    /**
     * @param LoggerInterface|null $logger
     * @param string $message
     */
    public static function logE(?LoggerInterface $logger, string $message): void
    {
        if (!is_null($logger) && !is_null($message)) {
            $logger->error($message);
        }
    }

    /**
     * @param LoggerInterface|null $logger
     * @param string $message
     */
    public static function logC(?LoggerInterface $logger, string $message): void
    {
        if (!is_null($logger) && !is_null($message)) {
            $logger->critical($message);
        }
    }
}