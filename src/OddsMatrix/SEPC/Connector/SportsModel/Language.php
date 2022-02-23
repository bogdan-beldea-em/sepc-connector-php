<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringUtil;

/**
 * Class Language
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Language")
 */
class Language implements Stringable
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

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("Language"))
            ->addProperty("code", $this->_code)
            ->addProperty("version", $this->_version)
            ->addProperty("createDate", ToStringUtil::transformDate($this->_createDate))
            ->addProperty("id", $this->_id)
            ;
    }
}
