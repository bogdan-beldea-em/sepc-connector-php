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
    use TypedTrait, IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("providerId")
    * @Serializer\XmlAttribute()
    */
    private $_providerId;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("providerEntityTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_providerEntityTypeId;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("providerEntityId")
    * @Serializer\XmlAttribute()
    */
    private $_providerEntityId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("entityTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_entityTypeId;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("providerEntityName")
    * @Serializer\XmlAttribute()
    */
    private $_providerEntityName;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("entityId")
    * @Serializer\XmlAttribute()
    */
    private $_entityId;

    /**
     * @return int|null
     */
    public function getProviderId(): ?int
    {
        return $this->_providerId;
    }

    /**
     * @return string|null
     */
    public function getProviderEntityTypeId(): ?string
    {
        return $this->_providerEntityTypeId;
    }

    /**
     * @return string|null
     */
    public function getProviderEntityId(): ?string
    {
        return $this->_providerEntityId;
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
    public function getEntityId(): ?int
    {
        return $this->_entityId;
    }

    /**
     * @return string|null
     */
    public function getProviderEntityName(): ?string
    {
        return $this->_providerEntityName;
    }
}
