<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Response;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SDQLError
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Response
 *
 * @Serializer\XmlRoot(name="error")
 */
class SDQLError
{
    /**
     * @var int|null
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("code")
     * @Serializer\XmlAttribute()
     */
    private $_code;

    /**
     * @var string|null
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
     * @return SDQLError
     */
    public static function wrap(array $wrapped_obj): SDQLError
    {
        return new SDQLError($wrapped_obj);
    }

    /**
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->_code;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->_message;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return "SDQLError[$this->_code $this->_message]";
    }


}