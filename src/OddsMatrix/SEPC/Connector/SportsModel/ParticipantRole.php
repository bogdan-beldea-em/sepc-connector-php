<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ParticipantRole
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="ParticipantRole")
 */
class ParticipantRole
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
     * @var bool
     *
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("isPrimary")
     * @Serializer\XmlAttribute()
     */
    private $_isPrimary;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("description")
     * @Serializer\XmlAttribute()
     */
    private $_description;

    /**
     * @return bool
     */
    public function isPrimary(): bool
    {
        return $this->_isPrimary;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->_description;
    }
}