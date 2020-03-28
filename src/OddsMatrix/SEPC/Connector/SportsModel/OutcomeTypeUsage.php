<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class OutcomeTypeUsage
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="OutcomeTypeUsage")
 */
class OutcomeTypeUsage
{
    use IdentifiableModelTrait, VersionedTrait;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("outcomeTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_outcomeTypeId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("eventTypeId")
    * @Serializer\XmlAttribute()
    */
    private $_eventTypeId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("eventPartId")
    * @Serializer\XmlAttribute()
    */
    private $_eventPartId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("sportId")
    * @Serializer\XmlAttribute()
    */
    private $_sportId;

    /**
    * @var int
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("scoringUnitId")
    * @Serializer\XmlAttribute()
    */
    private $_scoringUnitId;

    /**
     * @return int
     */
    public function getOutcomeTypeId(): int
    {
        return $this->_outcomeTypeId;
    }

    /**
     * @return int
     */
    public function getEventTypeId(): int
    {
        return $this->_eventTypeId;
    }

    /**
     * @return int
     */
    public function getEventPartId(): int
    {
        return $this->_eventPartId;
    }

    /**
     * @return int
     */
    public function getSportId(): int
    {
        return $this->_sportId;
    }

    /**
     * @return int
     */
    public function getScoringUnitId(): int
    {
        return $this->_scoringUnitId;
    }

}
