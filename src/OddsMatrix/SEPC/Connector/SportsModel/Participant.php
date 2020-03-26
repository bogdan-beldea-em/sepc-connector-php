<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Participant
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Participant")
 */
class Participant
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("typeId")
     * @Serializer\XmlAttribute()
     */
    private $_typeId;

    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("countryId")
     * @Serializer\XmlAttribute()
     */
    private $_countryId;

    /**
     * @var bool
     *
     * @Serializer\Type("bool")
     * @Serializer\SerializedName("isMale")
     * @Serializer\XmlAttribute()
     */
    private $_isMale;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("firstName")
     * @Serializer\XmlAttribute()
     */
    private $_firstName;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("lastName")
     * @Serializer\XmlAttribute()
     */
    private $_lastName;

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->_typeId;
    }

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->_countryId;
    }

    /**
     * @return bool
     */
    public function isMale(): bool
    {
        return $this->_isMale;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->_firstName;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->_lastName;
    }
}