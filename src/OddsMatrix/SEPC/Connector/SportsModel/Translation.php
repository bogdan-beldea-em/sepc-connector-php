<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Translation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Translation")
 */
class Translation
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("entityId")
    * @Serializer\XmlAttribute()
    */
    private $_entityId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("entityTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_entityTypeId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("languageId")
    * @Serializer\XmlAttribute()
    */
    private $_languageId;

    /**
    * @var \DateTime
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("lastChangedDate")
    * @Serializer\XmlAttribute()
    */
    private $_lastChangedDate;

    /**
     * @return int
     */
    public function getEntityId(): int
    {
        return $this->_entityId;
    }

    /**
     * @return int
     */
    public function getEntityTypeId(): int
    {
        return $this->_entityTypeId;
    }

    /**
     * @return int
     */
    public function getLanguageId(): int
    {
        return $this->_languageId;
    }

    /**
     * @return \DateTime
     */
    public function getLastChangedDate(): \DateTime
    {
        return $this->_lastChangedDate;
    }

}
