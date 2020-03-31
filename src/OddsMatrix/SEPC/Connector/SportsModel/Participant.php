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
    use TypedTrait, IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("typeId")
    * @Serializer\XmlAttribute()
    */
    private $_typeId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("countryId")
    * @Serializer\XmlAttribute()
    */
    private $_countryId;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isMale")
    * @Serializer\XmlAttribute()
    */
    private $_isMale;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("firstName")
    * @Serializer\XmlAttribute()
    */
    private $_firstName;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("lastName")
    * @Serializer\XmlAttribute()
    */
    private $_lastName;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("url")
    * @Serializer\XmlAttribute()
    */
    private $_url;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("shortName")
    * @Serializer\XmlAttribute()
    */
    private $_shortName;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("logoUrl")
    * @Serializer\XmlAttribute()
    */
    private $_logoUrl;

    /**
    * @var \DateTime|null
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("birthTime")
    * @Serializer\XmlAttribute()
    */
    private $_birthTime;

    /**
     * @return int|null
     */
    public function getTypeId(): ?int
    {
        return $this->_typeId;
    }

    /**
     * @return int|null
     */
    public function getCountryId(): ?int
    {
        return $this->_countryId;
    }

    /**
     * @return bool|null
     */
    public function isMale(): ?bool
    {
        return $this->_isMale;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->_firstName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->_lastName;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->_url;
    }

    /**
     * @return string|null
     */
    public function getShortName(): ?string
    {
        return $this->_shortName;
    }

    /**
     * @return string|null
     */
    public function getLogoUrl(): ?string
    {
        return $this->_logoUrl;
    }

    /**
     * @return \DateTime|null
     */
    public function getBirthTime(): ?\DateTime
    {
        return $this->_birthTime;
    }

}
