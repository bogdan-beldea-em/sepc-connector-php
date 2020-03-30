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
}