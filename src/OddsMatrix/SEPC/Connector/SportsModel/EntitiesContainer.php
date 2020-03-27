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
     * @var EventPart[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventPart>")
     * @Serializer\XmlList(inline=true, entry=""EventPart")
     */
    private $_eventParts;

    /**
     * @var EventStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventStatus>")
     * @Serializer\XmlList()
     */
    private $_eventStatuses;

    /**
     * @var EventCategory[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventCategory>")
     * @Serializer\XmlList()
     */
    private $_eventCategories;

    /**
     * @var EventTemplate[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventTemplate>")
     * @Serializer\XmlList()
     */
    private $_eventTemplates;

    /**
     * @var Event[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Event>")
     * @Serializer\XmlList()
     */
    private $_events;

    /**
     * @var EventPartDefaultUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventPartDefaultUsage>")
     * @Serializer\XmlList()
     */
    private $_eventPartDefaultUsages;

    /**
     * @var EntityProperty[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EntityProperty>")
     * @Serializer\XmlList()
     */
    private $_entityProperties;

    /**
     * @var EventParticipantRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantRelation>")
     * @Serializer\XmlList()
     */
    private $_eventParticipantRelations;

    /**
     * @var Source[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Source>")
     * @Serializer\XmlList()
     */
    private $_sources;

    /**
     * @var ParticipantRelationType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantRelationType>")
     * @Serializer\XmlList()
     */
    private $_participantRelationTypes;

    /**
     * @var ParticipantRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantRelation>")
     * @Serializer\XmlList()
     */
    private $_participantRelations;

    /**
     * @var ProviderEventRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ProviderEventRelation>")
     * @Serializer\XmlList()
     */
    private $_providerEventRelations;

    /**
     * @var StreamingProvider[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\StreamingProvider>")
     * @Serializer\XmlList()
     */
    private $_streamingProviders;

    /**
     * @var StreamingProviderEventRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\StreamingProviderEventRelation>")
     * @Serializer\XmlList()
     */
    private $_streamingProviderEventRelations;

    /**
     * @var OutcomeStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\OutcomeStatus>")
     * @Serializer\XmlList()
     */
    private $_outcomeStatuses;

    /**
     * @var OutcomeType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\OutcomeType>")
     * @Serializer\XmlList()
     */
    private $_outcomeTypes;

    /**
     * @var OutcomeTypeBettingTypeRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\OutcomeTypeBettingTypeRelation>")
     * @Serializer\XmlList()
     */
    private $_outcomeTypeBettingRelations;

    /**
     * @var BettingOfferStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\BettingOfferStatus>")
     * @Serializer\XmlList()
     */
    private $_bettingOfferStatuses;

    /**
     * @var BettingTypeUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\BettingTypeUsage>")
     * @Serializer\XmlList()
     */
    private $_bettingTypeUsages;

    /**
     * @var OutcomeTypeUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\OutcomeTypeUsage>")
     * @Serializer\XmlList()
     */
    private $_outcomeTypeUsages;
}