<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Response;

use OM\OddsMatrix\SEPC\Connector\SportsModel\UpdateData;

/**
 * Class SDQLUpdateDataResponse
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Response
 */
class SDQLUpdateDataResponse
{
    /**
     * @var UpdateData[]|null
     */
    private $_dataUpdates;

    /**
     * @param array $wrapped_obj
     */
    public function __construct(array $wrapped_obj)
    {
        $this->_dataUpdates = [UpdateData::wrap($wrapped_obj['UpdateData'])];
    }

    /**
     * @param array $wrapped_obj
     * @return SDQLUpdateDataResponse
     */
    public static function wrap(array $wrapped_obj): SDQLUpdateDataResponse
    {
        return new SDQLUpdateDataResponse($wrapped_obj);
    }

    /**
     * @return UpdateData[]|null
     */
    public function getDataUpdates(): ?array
    {
        return $this->_dataUpdates;
    }
}