<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Response;

/**
 * Class SDQLUnsubscribeResponse
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Response
 */
class SDQLUnsubscribeResponse
{
    /**
     * @var int
     */
    private $_code;

    /**
     * @var string
     */
    private $_message;

    /**
     * @param array|null $array
     */
    public function __construct(array $array = null)
    {
        if (is_null($array)) {
            return;
        }

        $this->_code = $array['code'];
        $this->_message = $array['message'];
    }

    /**
     * @param array $wrapped_obj
     * @return SDQLUnsubscribeResponse
     */
    public static function wrap(array $wrapped_obj):SDQLUnsubscribeResponse
    {
        return new SDQLUnsubscribeResponse($wrapped_obj);
    }

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->_code;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->_message;
    }
}