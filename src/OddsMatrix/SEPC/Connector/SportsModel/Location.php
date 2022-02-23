<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class Location
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="Location")
 */
class Location implements Stringable
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("typeId")
    * @Serializer\XmlAttribute()
    */
    private $_typeId;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("code")
    * @Serializer\XmlAttribute()
    */
    private $_code;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("isHistoric")
    * @Serializer\XmlAttribute()
    */
    private $_isHistoric;

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
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->_code;
    }

    /**
     * @return bool|null
     */
    public function isHistoric(): ?bool
    {
        return $this->_isHistoric;
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
    public function getNote(): ?string
    {
        return $this->_note;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("Location"))
            ->addProperty("note", $this->_note)
            ->addProperty("id", $this->_id)
            ->addProperty("name", $this->_name)
            ->addProperty("isHistoric", $this->_isHistoric)
            ->addProperty("url", $this->_url)
            ->addProperty("typeId", $this->_typeId)
            ->addProperty("version", $this->_version)
            ->addProperty("code", $this->_code)
            ;
    }
}
