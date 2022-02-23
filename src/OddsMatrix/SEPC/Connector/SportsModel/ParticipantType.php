<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class ParticipantType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="ParticipantType")
 */
class ParticipantType implements Stringable
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
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasIsMale")
    * @Serializer\XmlAttribute()
    */
    private $_hasIsMale;
    
    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasBirthTime")
    * @Serializer\XmlAttribute()
    */
    private $_hasBirthTime;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasCountry")
    * @Serializer\XmlAttribute()
    */
    private $_hasCountry;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasRetirementTime")
    * @Serializer\XmlAttribute()
    */
    private $_hasRetirementTime;

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

    /**
     * @return bool|null
     */
    public function isHasIsMale(): ?bool
    {
        return $this->_hasIsMale;
    }

    /**
     * @return bool|null
     */
    public function isHasBirthTime(): ?bool
    {
        return $this->_hasBirthTime;
    }

    /**
     * @return bool|null
     */
    public function isHasCountry(): ?bool
    {
        return $this->_hasCountry;
    }

    /**
     * @return bool|null
     */
    public function isHasRetirementTime(): ?bool
    {
        return $this->_hasRetirementTime;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("ParticipantType"))
            ->addProperty("hasName", $this->_hasName)
            ->addProperty("hasCountry", $this->_hasCountry)
            ->addProperty("hasShortName", $this->_hasShortName)
            ->addProperty("id", $this->_id)
            ->addProperty("isIndividual", $this->_isIndividual)
            ->addProperty("version", $this->_version)
            ->addProperty("hasRetirementTime", $this->_hasRetirementTime)
            ->addProperty("hasIsMale", $this->_hasIsMale)
            ->addProperty("hasFirstName", $this->_hasFirstName)
            ->addProperty("name", $this->_name)
            ->addProperty("hasBirthTime", $this->_hasBirthTime)
            ->addProperty("hasLastName", $this->_hasLastName)
            ;
    }
}
