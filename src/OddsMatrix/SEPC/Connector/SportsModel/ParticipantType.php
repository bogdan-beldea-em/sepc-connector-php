<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ParticipantType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="ParticipantType")
 */
class ParticipantType
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isIndividual")
    * @Serializer\XmlAttribute()
    */
    private $_isIndividual;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasName")
    * @Serializer\XmlAttribute()
    */
    private $_hasName;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasFirstName")
    * @Serializer\XmlAttribute()
    */
    private $_hasFirstName;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasLastName")
    * @Serializer\XmlAttribute()
    */
    private $_hasLastName;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasShortName")
    * @Serializer\XmlAttribute()
    */
    private $_hasShortName;

    /**
     * @return bool|null
     */
    public function isIndividual(): ?bool
    {
        return $this->_isIndividual;
    }

    /**
     * @return bool|null
     */
    public function isHasName(): ?bool
    {
        return $this->_hasName;
    }

    /**
     * @return bool|null
     */
    public function isHasFirstName(): ?bool
    {
        return $this->_hasFirstName;
    }

    /**
     * @return bool|null
     */
    public function isHasLastName(): ?bool
    {
        return $this->_hasLastName;
    }

    /**
     * @return bool|null
     */
    public function isHasShortName(): ?bool
    {
        return $this->_hasShortName;
    }

}
