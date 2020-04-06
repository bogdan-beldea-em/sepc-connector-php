<?php


namespace OM\OddsMatrix\SEPC\Connector\SDQL\Response;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\SportsModel\InitialData;

/**
 * Class SDQLInitialDataResponse
 * @package OM\OddsMatrix\SEPC\Connector\SDQL\Response
 *
 * @Serializer\XmlRoot(name="GetNextInitialDataResponse")
 */
class SDQLInitialDataResponse
{
    /**
     * @var InitialData|null
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SportsModel\InitialData")
     * @Serializer\SerializedName("InitialData")
     * @Serializer\XmlElement()
     */
    private $_initialData;

    /**
     * @return InitialData|null
     */
    public function getInitialData(): ?InitialData
    {
        return $this->_initialData;
    }
}