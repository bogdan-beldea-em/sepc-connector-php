<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringUtil;

/**
 * Class Translation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Translation")
 */
class Translation implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("entityId")
    * @Serializer\XmlAttribute()
    */
    private $_entityId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("entityTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_entityTypeId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("languageId")
    * @Serializer\XmlAttribute()
    */
    private $_languageId;

    /**
    * @var \DateTime|null
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("lastChangedDate")
    * @Serializer\XmlAttribute()
    */
    private $_lastChangedDate;

    /**
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->_entityId;
    }

    /**
     * @return int|null
     */
    public function getEntityTypeId(): ?int
    {
        return $this->_entityTypeId;
    }

    /**
     * @return int|null
     */
    public function getLanguageId(): ?int
    {
        return $this->_languageId;
    }

    /**
     * @return \DateTime|null
     */
    public function getLastChangedDate(): ?\DateTime
    {
        return $this->_lastChangedDate;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("Translation"))
            ->addProperty("type", $this->_type)
            ->addProperty("version", $this->_version)
            ->addProperty("name", $this->_name)
            ->addProperty("lastChangedDate", ToStringUtil::transformDate($this->_lastChangedDate))
            ->addProperty("languageId", $this->_languageId)
            ->addProperty("entityTypeId", $this->_entityTypeId)
            ->addProperty("id", $this->_id)
            ->addProperty("entityId", $this->_entityId)
            ;
    }
}
