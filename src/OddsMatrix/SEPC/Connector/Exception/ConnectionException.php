<?php


namespace OM\OddsMatrix\SEPC\Connector\Exception;


class ConnectionException extends \Exception
{
    protected $message = 'Failed to connect';
}