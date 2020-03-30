<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Response;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\SportsModel\UpdateData;

/**
 * Class SDQLUpdateDataResponse
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Response
 *
 * @Serializer\XmlRoot(name="GetNextUpdateDataResponse")
 */
class SDQLUpdateDataResponse
{
    /**
     * @var UpdateData[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\UpdateData>")
     * @Serializer\XmlList(inline=true, entry="UpdateData")
     */
    private $_dataUpdates;

    /**
     * @return UpdateData[]
     */
    public function getDataUpdates(): array
    {
        return $this->_dataUpdates;
    }
}