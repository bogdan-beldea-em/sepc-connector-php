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
     * @var EventActionDetailType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionDetailType>")
     * @Serializer\XmlList(inline=true, entry="EventActionDetailType")
     */
    private $_eventActionDetailTypes;

    /**
     * @var Source[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Source>")
     * @Serializer\XmlList(inline=true, entry="Source")
     */
    private $_sources;

    /**
     * @var EventPart[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventPart>")
     * @Serializer\XmlList(inline=true, entry="EventPart")
     */
    private $_eventParts;

    /**
     * @var OutcomeType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\OutcomeType>")
     * @Serializer\XmlList(inline=true, entry="OutcomeType")
     */
    private $_outcomeTypes;

    /**
     * @var EventInfo[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventInfo>")
     * @Serializer\XmlList(inline=true, entry="EventInfo")
     */
    private $_eventInfos;

    /**
     * @var EventActionStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionStatus>")
     * @Serializer\XmlList(inline=true, entry="EventActionStatus")
     */
    private $_eventActionStatuses;

    /**
     * @var EventParticipantInfoDetail[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoDetail>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoDetail")
     */
    private $_eventParticipantInfoDetails;

    /**
     * @var LocationRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\LocationRelation>")
     * @Serializer\XmlList(inline=true, entry="LocationRelation")
     */
    private $_locationRelations;

    /**
     * @var EventCategory[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventCategory>")
     * @Serializer\XmlList(inline=true, entry="EventCategory")
     */
    private $_eventCategories;

    /**
     * @var StreamingProviderEventRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\StreamingProviderEventRelation>")
     * @Serializer\XmlList(inline=true, entry="StreamingProviderEventRelation")
     */
    private $_streamingProviderEventRelations;

    /**
     * @var EntityProperty[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EntityProperty>")
     * @Serializer\XmlList(inline=true, entry="EntityProperty")
     */
    private $_entityProperties;

    /**
     * @var Translation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Translation>")
     * @Serializer\XmlList(inline=true, entry="Translation")
     */
    private $_translations;

    /**
     * @var Language[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Language>")
     * @Serializer\XmlList(inline=true, entry="Language")
     */
    private $_languages;

    /**
     * @var OutcomeStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\OutcomeStatus>")
     * @Serializer\XmlList(inline=true, entry="OutcomeStatus")
     */
    private $_outcomeStatuses;

    /**
     * @var EventTemplate[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventTemplate>")
     * @Serializer\XmlList(inline=true, entry="EventTemplate")
     */
    private $_eventTemplates;

    /**
     * @var EntityPropertyType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EntityPropertyType>")
     * @Serializer\XmlList(inline=true, entry="EntityPropertyType")
     */
    private $_entityPropertyTypes;

    /**
     * @var BettingOffer[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\BettingOffer>")
     * @Serializer\XmlList(inline=true, entry="BettingOffer")
     */
    private $_bettingOffers;

    /**
     * @var OutcomeTypeUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\OutcomeTypeUsage>")
     * @Serializer\XmlList(inline=true, entry="OutcomeTypeUsage")
     */
    private $_outcomeTypeUsages;

    /**
     * @var EventAction[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventAction>")
     * @Serializer\XmlList(inline=true, entry="EventAction")
     */
    private $_eventActions;

    /**
     * @var EventType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventType>")
     * @Serializer\XmlList(inline=true, entry="EventType")
     */
    private $_eventTypes;

    /**
     * @var Provider[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Provider>")
     * @Serializer\XmlList(inline=true, entry="Provider")
     */
    private $_providers;

    /**
     * @var Event[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Event>")
     * @Serializer\XmlList(inline=true, entry="Event")
     */
    private $_events;

    /**
     * @var ProviderEntityMapping[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ProviderEntityMapping>")
     * @Serializer\XmlList(inline=true, entry="ProviderEntityMapping")
     */
    private $_providerEntityMappings;

    /**
     * @var StreamingProvider[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\StreamingProvider>")
     * @Serializer\XmlList(inline=true, entry="StreamingProvider")
     */
    private $_streamingProviders;

    /**
     * @var OutcomeTypeBettingTypeRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\OutcomeTypeBettingTypeRelation>")
     * @Serializer\XmlList(inline=true, entry="OutcomeTypeBettingTypeRelation")
     */
    private $_outcomeTypeBettingTypeRelations;

    /**
     * @var Outcome[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Outcome>")
     * @Serializer\XmlList(inline=true, entry="Outcome")
     */
    private $_outcomes;

    /**
     * @var EventActionDetail[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionDetail>")
     * @Serializer\XmlList(inline=true, entry="EventActionDetail")
     */
    private $_eventActionDetails;

    /**
     * @var Sport[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Sport>")
     * @Serializer\XmlList(inline=true, entry="Sport")
     */
    private $_sports;

    /**
     * @var EventActionDetailStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionDetailStatus>")
     * @Serializer\XmlList(inline=true, entry="EventActionDetailStatus")
     */
    private $_eventActionDetailStatuses;

    /**
     * @var EventParticipantInfo[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfo>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfo")
     */
    private $_eventParticipantInfos;

    /**
     * @var EntityType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EntityType>")
     * @Serializer\XmlList(inline=true, entry="EntityType")
     */
    private $_entityTypes;

    /**
     * @var ParticipantRole[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantRole>")
     * @Serializer\XmlList(inline=true, entry="ParticipantRole")
     */
    private $_participantRoles;

    /**
     * @var Currency[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Currency>")
     * @Serializer\XmlList(inline=true, entry="Currency")
     */
    private $_currencies;

    /**
     * @var EventParticipantInfoStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoStatus>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoStatus")
     */
    private $_eventParticipantInfoStatuses;

    /**
     * @var EventParticipantRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantRelation>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantRelation")
     */
    private $_eventParticipantRelations;

    /**
     * @var EventPartDefaultUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventPartDefaultUsage>")
     * @Serializer\XmlList(inline=true, entry="EventPartDefaultUsage")
     */
    private $_eventPartDefaultUsages;

    /**
     * @var ParticipantRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantRelation>")
     * @Serializer\XmlList(inline=true, entry="ParticipantRelation")
     */
    private $_participantRelations;

    /**
     * @var EventInfoType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventInfoType>")
     * @Serializer\XmlList(inline=true, entry="EventInfoType")
     */
    private $_eventInfoTypes;

    /**
     * @var EventActionType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionType>")
     * @Serializer\XmlList(inline=true, entry="EventActionType")
     */
    private $_eventActionTypes;

    /**
     * @var EventStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventStatus>")
     * @Serializer\XmlList(inline=true, entry="EventStatus")
     */
    private $_eventStatuses;

    /**
     * @var LocationType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\LocationType>")
     * @Serializer\XmlList(inline=true, entry="LocationType")
     */
    private $_locationTypes;

    /**
     * @var BettingTypeUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\BettingTypeUsage>")
     * @Serializer\XmlList(inline=true, entry="BettingTypeUsage")
     */
    private $_bettingTypeUsages;

    /**
     * @var EventInfoStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventInfoStatus>")
     * @Serializer\XmlList(inline=true, entry="EventInfoStatus")
     */
    private $_eventInfoStatuses;

    /**
     * @var MarketOutcomeRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\MarketOutcomeRelation>")
     * @Serializer\XmlList(inline=true, entry="MarketOutcomeRelation")
     */
    private $_marketOutcomeRelations;

    /**
     * @var ParticipantRelationType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantRelationType>")
     * @Serializer\XmlList(inline=true, entry="ParticipantRelationType")
     */
    private $_participantRelationTypes;

    /**
     * @var ParticipantType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantType>")
     * @Serializer\XmlList(inline=true, entry="ParticipantType")
     */
    private $_participantTypes;

    /**
     * @var Market[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Market>")
     * @Serializer\XmlList(inline=true, entry="Market")
     */
    private $_markets;

    /**
     * @var Location[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Location>")
     * @Serializer\XmlList(inline=true, entry="Location")
     */
    private $_locations;

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
     * @var LocationRelationType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\LocationRelationType>")
     * @Serializer\XmlList(inline=true, entry="LocationRelationType")
     */
    private $_locationRelationTypes;

    /**
     * @var Participant[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Participant>")
     * @Serializer\XmlList(inline=true, entry="Participant")
     */
    private $_participants;

    /**
     * @var EventParticipantInfoDetailStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoDetailStatus>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoDetailStatus")
     */
    private $_eventParticipantInfoDetailStatuses;

    /**
     * @var BettingOfferStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\BettingOfferStatus>")
     * @Serializer\XmlList(inline=true, entry="BettingOfferStatus")
     */
    private $_bettingOfferStatuses;

    /**
     * @var ParticipantUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantUsage>")
     * @Serializer\XmlList(inline=true, entry="ParticipantUsage")
     */
    private $_participantUsages;

    /**
     * @var EventParticipantInfoType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoType>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoType")
     */
    private $_eventParticipantInfoTypes;

    /**
     * @var ProviderEventRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ProviderEventRelation>")
     * @Serializer\XmlList(inline=true, entry="ProviderEventRelation")
     */
    private $_providerEventRelations;

    /**
     * @var EventParticipantInfoDetailType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoDetailType>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoDetailType")
     */
    private $_eventParticipantInfoDetailTypes;

}
