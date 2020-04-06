<?php


namespace OM\OddsMatrix\SEPC\Connector\Exception;


class ConnectionException extends \Exception
{
    /**
     * ConnectionException constructor.
     * @param string $message
     * @param int $code
     */
    public function __construct(string $message = "Failed to connect", int $code = 0)
    {
        parent::__construct($message, $code);

        if (null != $message) {
            $this->message = $message;
        }
        if (null != $code) {
            $this->code = $code;
        }
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return "[ConnexionException] Code: {$this->getCode()}, Message: {$this->getMessage()}";
    }
}