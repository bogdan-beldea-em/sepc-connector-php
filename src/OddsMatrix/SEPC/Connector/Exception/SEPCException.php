<?php


namespace OM\OddsMatrix\SEPC\Connector\Exception;


use Throwable;

/**
 * Class SEPCException
 * @package OM\OddsMatrix\SEPC\Connector\Exception
 */
class SEPCException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}