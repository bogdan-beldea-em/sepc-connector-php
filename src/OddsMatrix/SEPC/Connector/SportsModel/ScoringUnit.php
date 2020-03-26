<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ScoringUnit
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="ScoringUnit")
 */
class ScoringUnit
{
    use IdentifiableModelTrait, NamedTrait, VersionedTrait;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("description")
     * @Serializer\XmlAttribute()
     */
    private $_description;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->_description;
    }
}