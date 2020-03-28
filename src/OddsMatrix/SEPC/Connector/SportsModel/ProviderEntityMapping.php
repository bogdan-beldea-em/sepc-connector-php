<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ProviderEntityMapping
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="ProviderEntityMapping")
 */
class ProviderEntityMapping
{
    use IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("providerId")
    * @Serializer\XmlAttribute()
    */
    private $_providerId;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("providerEntityTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_providerEntityTypeId;

    /**
    * @var string
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("providerEntityId")
    * @Serializer\XmlAttribute()
    */
    private $_providerEntityId;

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
    * @Serializer\SerializedName("entityId")
    * @Serializer\XmlAttribute()
    */
    private $_entityId;

    /**
     * @return int
     */
    public function getProviderId(): int
    {
        return $this->_providerId;
    }

    /**
     * @return string
     */
    public function getProviderEntityTypeId(): string
    {
        return $this->_providerEntityTypeId;
    }

    /**
     * @return string
     */
    public function getProviderEntityId(): string
    {
        return $this->_providerEntityId;
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
    public function getEntityId(): int
    {
        return $this->_entityId;
    }

}
