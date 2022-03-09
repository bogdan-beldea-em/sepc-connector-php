<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Response;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class SDQLPingRequest
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Response
 */
class SDQLPingRequest
{
    /**
    * @var string|null
    */
    private $_id;

    public function __construct(array $array = null)
    {
        if (is_null($array)) {
            return;
        }

        $this->_id = $array['id'];
    }

    public static function wrap($wrapped_obj): SDQLPingRequest
    {
        return new SDQLPingRequest($wrapped_obj);
    }

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->_id;
    }
}