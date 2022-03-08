<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Response;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SDQLUnsubscribeResponse
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Response
 *
 * @Serializer\XmlRoot(name="UnsubscribeResponse")
 */
class SDQLUnsubscribeResponse
{
    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("code")
     * @Serializer\XmlAttribute()
     */
    private $_code;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("message")
     * @Serializer\XmlAttribute()
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