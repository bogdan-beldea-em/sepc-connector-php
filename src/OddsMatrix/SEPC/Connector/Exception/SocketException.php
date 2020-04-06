<?php


namespace OM\OddsMatrix\SEPC\Connector\Exception;


use Throwable;

class SocketException extends \Exception
{
    /**
     * SocketException constructor.
     * @param $message
     * @param $code
     * @param Throwable|null $previous
     */
    public function __construct($message, $code, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "[SocketException] Code: {$this->getCode()} Message: {$this->getMessage()}";
    }
}