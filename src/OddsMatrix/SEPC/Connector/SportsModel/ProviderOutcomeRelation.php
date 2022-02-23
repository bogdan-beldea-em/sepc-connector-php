<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;


use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\ToStringBuilder;

/**
 * Class ProviderOutcomeRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="ProviderOutcomeRelation")
 */
class ProviderOutcomeRelation
{
    use IdentifiableModelTrait, UpdateTimeTrait;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("statusId")
    * @Serializer\XmlAttribute()
    */
    private $_statusId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("providerId")
    * @Serializer\XmlAttribute()
    */
    private $_providerId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("outcomeId")
    * @Serializer\XmlAttribute()
    */
    private $_outcomeId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("qualityRank")
    * @Serializer\XmlAttribute()
    */
    private $_qualityRank;

    /**
     * @return int|null
     */
    public function getStatusId(): ?int
    {
        return $this->_statusId;
    }

    /**
     * @return int|null
     */
    public function getProviderId(): ?int
    {
        return $this->_providerId;
    }

    /**
     * @return int|null
     */
    public function getOutcomeId(): ?int
    {
        return $this->_outcomeId;
    }

    /**
     * @return int|null
     */
    public function getQualityRank(): ?int
    {
        return $this->_qualityRank;
    }

    /**
     * @return string
     */
    public function __toString(): string
    {
        return (new ToStringBuilder("ProviderOutcomeRelation"))
            ->addProperty("lastChangedTime", $this->_lastChangedTime)
            ->addProperty("qualityRank", $this->_qualityRank)
            ->addProperty("id", $this->_id)
            ->addProperty("statusId", $this->_statusId)
            ->addProperty("providerId", $this->_providerId)
            ->addProperty("outcomeId", $this->_outcomeId)
            ;
    }
}