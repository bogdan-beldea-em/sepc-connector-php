<?php


class StdoutLogger implements \Psr\Log\LoggerInterface {
    public function emergency($message, array $context = array())
    {
        // TODO: Implement emergency() method.
    }

    public function alert($message, array $context = array())
    {
        echo "[ALERT] $message\n";
    }

    public function critical($message, array $context = array())
    {
        // TODO: Implement critical() method.
    }

    public function error($message, array $context = array())
    {
        echo "[ERROR] $message\n";
    }

    public function warning($message, array $context = array())
    {
        echo "[WARN] $message\n";
    }

    public function notice($message, array $context = array())
    {
        // TODO: Implement notice() method.
    }

    public function info($message, array $context = array())
    {
        echo "[INFO] $message\n";
    }

    public function debug($message, array $context = array())
    {
        echo "[DEBUG] $message\n";
    }

    public function log($level, $message, array $context = array())
    {
        // TODO: Implement log() method.
    }
}