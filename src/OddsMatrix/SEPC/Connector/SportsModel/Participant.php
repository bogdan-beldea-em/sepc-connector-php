<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringUtil;

/**
 * Class Participant
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Participant")
 */
class Participant implements Stringable
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
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isBanned")
    * @Serializer\XmlAttribute()
    */
    private $_isBanned;

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
    * @var \DateTime|null
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("retirementTime")
    * @Serializer\XmlAttribute()
    */
    private $_retirementTime;

    /**
    * @var \DateTime|null
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("lastEventParticipationTime")
    * @Serializer\XmlAttribute()
    */
    private $_lastEventParticipationTime;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("note")
    * @Serializer\XmlAttribute()
    */
    private $_note;

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

    /**
     * @return bool|null
     */
    public function isBanned(): ?bool
    {
        return $this->_isBanned;
    }

    /**
     * @return \DateTime|null
     */
    public function getRetirementTime(): ?\DateTime
    {
        return $this->_retirementTime;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastEventParticipationTime(): ?\DateTime
    {
        return $this->_lastEventParticipationTime;
    }

    /**
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->_note;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("Participant"))
            ->addProperty("id", $this->_id)
            ->addProperty("url", $this->_url)
            ->addProperty("name", $this->_name)
            ->addProperty("retirementTime", ToStringUtil::transformDate($this->_retirementTime))
            ->addProperty("type", $this->_type)
            ->addProperty("isBanned", $this->_isBanned)
            ->addProperty("isMale", $this->_isMale)
            ->addProperty("typeId", $this->_typeId)
            ->addProperty("lastEventParticipationTime", ToStringUtil::transformDate($this->_lastEventParticipationTime))
            ->addProperty("shortName", $this->_shortName)
            ->addProperty("logoUrl", $this->_logoUrl)
            ->addProperty("lastName", $this->_lastName)
            ->addProperty("birthTime", ToStringUtil::transformDate($this->_birthTime))
            ->addProperty("countryId", $this->_countryId)
            ->addProperty("note", $this->_note)
            ->addProperty("firstName", $this->_firstName)
            ->addProperty("version", $this->_version)
            ;
    }
}
