<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class EntitiesContainer
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="entities")
 */
class EntitiesContainer
{
    /**
     * @var Sport[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Sport>")
     * @Serializer\XmlList(inline=true, entry="Sport")
     */
    private $_sports;

    /**
     * @var Location[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Location>")
     * @Serializer\XmlList(inline=true, entry="Location")
     */
    private $_locations;

    /**
     * @var LocationRelationType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\LocationRelationType>")
     * @Serializer\XmlList(inline=true, entry="LocationRelationType")
     */
    private $_locationRelationTypes;

    /**
     * @var LocationType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\LocationType>")
     * @Serializer\XmlList(inline=true, entry="LocationType")
     */
    private $_locationTypes;

    /**
     * @var Currency[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Currency>")
     * @Serializer\XmlList(inline=true, entry="Currency")
     */
    private $_currencies;

    /**
     * @var LocationRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\LocationRelation>")
     * @Serializer\XmlList(inline=true, entry="LocationRelation")
     */
    private $_locationRelations;

    /**
     * @var Provider[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Provider>")
     * @Serializer\XmlList(inline=true, entry="Provider")
     */
    private $_providers;

    /**
     * @var ScoringUnit[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ScoringUnit>")
     * @Serializer\XmlList(inline=true, entry="ScoringUnit")
     */
    private $_scoringUnits;

    /**
     * @var BettingType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\BettingType>")
     * @Serializer\XmlList(inline=true, entry="BettingType")
     */
    private $_bettingTypes;

    /**
     * @var ParticipantType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantType>")
     * @Serializer\XmlList(inline=true, entry="ParticipantType")
     */
    private $_participantTypes;

    /**
     * @var ParticipantRole[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantRole>")
     * @Serializer\XmlList(inline=true, entry="ParticipantRole")
     */
    private $_participantRoles;

    /**
     * @var Participant[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Participant>")
     * @Serializer\XmlList(inline=true, entry="Participant")
     */
    private $_participants;

    /**
     * @var ParticipantUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantUsage>")
     * @Serializer\XmlList(inline=true, entry="ParticipantUsage")
     */
    private $_participantUsages;

    /**
     * @var EventType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventType>")
     * @Serializer\XmlList(inline=true, entry="EventType")
     */
    private $_eventTypes;

    /**
     * @return Sport[]
     */
    public function getSports(): array
    {
        return $this->_sports;
    }

    /**
     * @return Location[]
     */
    public function getLocations(): array
    {
        return $this->_locations;
    }

    /**
     * @return LocationRelationType[]
     */
    public function getLocationRelationTypes(): array
    {
        return $this->_locationRelationTypes;
    }

    /**
     * @return LocationType[]
     */
    public function getLocationTypes(): array
    {
        return $this->_locationTypes;
    }

    /**
     * @return Currency[]
     */
    public function getCurrencies(): array
    {
        return $this->_currencies;
    }

    /**
     * @return LocationRelation[]
     */
    public function getLocationRelations(): array
    {
        return $this->_locationRelations;
    }

    /**
     * @return ScoringUnit[]
     */
    public function getScoringUnits(): array
    {
        return $this->_scoringUnits;
    }

    /**
     * @return BettingType[]
     */
    public function getBettingTypes(): array
    {
        return $this->_bettingTypes;
    }

    /**
     * @return Provider[]
     */
    public function getProviders(): array
    {
        return $this->_providers;
    }

    /**
     * @return ParticipantRole[]
     */
    public function getParticipantRoles(): array
    {
        return $this->_participantRoles;
    }

    /**
     * @return Participant[]
     */
    public function getParticipants(): array
    {
        return $this->_participants;
    }

    /**
     * @return ParticipantType[]
     */
    public function getParticipantTypes(): array
    {
        return $this->_participantTypes;
    }

    /**
     * @return EventType[]
     */
    public function getEventTypes(): array
    {
        return $this->_eventTypes;
    }

    /**
     * @return ParticipantUsage[]
     */
    public function getParticipantUsages(): array
    {
        return $this->_participantUsages;
    }
}