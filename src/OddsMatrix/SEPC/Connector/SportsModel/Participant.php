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
    * @var bool
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isMale")
    * @Serializer\XmlAttribute()
    */
    private $_isMale;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("countryId")
    * @Serializer\XmlAttribute()
    */
    private $_countryId;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("url")
    * @Serializer\XmlAttribute()
    */
    private $_url;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("shortName")
    * @Serializer\XmlAttribute()
    */
    private $_shortName;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("logoUrl")
    * @Serializer\XmlAttribute()
    */
    private $_logoUrl;

    /**
    * @var \DateTime
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("birthTime")
    * @Serializer\XmlAttribute()
    */
    private $_birthTime;

    /**
     * @return int
     */
    public function getTypeId(): int
    {
        return $this->_typeId;
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

    /**
     * @return bool
     */
    public function isMale(): bool
    {
        return $this->_isMale;
    }

    /**
     * @return int
     */
    public function getCountryId(): int
    {
        return $this->_countryId;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->_url;
    }

    /**
     * @return string
     */
    public function getShortName(): string
    {
        return $this->_shortName;
    }

    /**
     * @return string
     */
    public function getLogoUrl(): string
    {
        return $this->_logoUrl;
    }

    /**
     * @return \DateTime
     */
    public function getBirthTime(): \DateTime
    {
        return $this->_birthTime;
    }

}
