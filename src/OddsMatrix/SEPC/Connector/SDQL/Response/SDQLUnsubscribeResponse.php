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