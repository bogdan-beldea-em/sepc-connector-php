<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class Language
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Language")
 */
class Language
{
    use IdentifiableModelTrait, VersionedTrait;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("code")
    * @Serializer\XmlAttribute()
    */
    private $_code;

    /**
    * @var \DateTime|null
    *
    * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
    * @Serializer\SerializedName("createDate")
    * @Serializer\XmlAttribute()
    */
    private $_createDate;

    /**
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->_code;
    }

    /**
     * @return \DateTime|null
     */
    public function getCreateDate(): ?\DateTime
    {
        return $this->_createDate;
    }

}
