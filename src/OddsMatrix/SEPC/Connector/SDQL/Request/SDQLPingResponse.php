<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Request;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SDQLPingResponse
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Request
 *
 * @Serializer\XmlRoot(name="PingResponse")
 */
class SDQLPingResponse
{
    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("id")
    * @Serializer\XmlAttribute()
    */
    private $_id;

    /**
     * SDQLPingResponse constructor.
     * @param string $_id
     */
    public function __construct(string $_id)
    {
        $this->_id = $_id;
    }
}