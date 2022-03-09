<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Response;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\SportsModel\InitialData;

/**
 * Class SDQLInitialDataResponse
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Response
 */
class SDQLInitialDataResponse
{
    /**
     * @var InitialData|null
     */
    private $_initialData;

    /**
     * @param array $wrapped_obj
     */
    public function __construct(array $wrapped_obj)
    {
        $this->_initialData = $wrapped_obj['InitialData'];
    }

    /**
     * @param array $wrapped_obj
     * @return SDQLInitialDataResponse
     */
    public static function wrap(array $wrapped_obj): SDQLInitialDataResponse
    {
        return new SDQLInitialDataResponse($wrapped_obj);
    }

    /**
     * @return InitialData|null
     */
    public function getInitialData(): ?InitialData
    {
        return $this->_initialData;
    }
}