<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;


use JMS\Serializer\Annotation as Serializer;

trait EntitiesTrait
{
    /**
     * @var EventActionDetailType[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionDetailType>")
     * @Serializer\XmlList(inline=true, entry="EventActionDetailType")
     */
    private $_eventActionDetailTypes;

    /**
     * @var Source[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Source>")
     * @Serializer\XmlList(inline=true, entry="Source")
     */
    private $_sources;

    /**
     * @var EventPart[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventPart>")
     * @Serializer\XmlList(inline=true, entry="EventPart")
     */
    private $_eventParts;

    /**
     * @var OutcomeType[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\OutcomeType>")
     * @Serializer\XmlList(inline=true, entry="OutcomeType")
     */
    private $_outcomeTypes;

    /**
     * @var EventInfo[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventInfo>")
     * @Serializer\XmlList(inline=true, entry="EventInfo")
     */
    private $_eventInfos;

    /**
     * @var EventActionStatus[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionStatus>")
     * @Serializer\XmlList(inline=true, entry="EventActionStatus")
     */
    private $_eventActionStatuses;

    /**
     * @var EventParticipantInfoDetail[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoDetail>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoDetail")
     */
    private $_eventParticipantInfoDetails;

    /**
     * @var LocationRelation[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\LocationRelation>")
     * @Serializer\XmlList(inline=true, entry="LocationRelation")
     */
    private $_locationRelations;

    /**
     * @var EventCategory[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventCategory>")
     * @Serializer\XmlList(inline=true, entry="EventCategory")
     */
    private $_eventCategories;

    /**
     * @var StreamingProviderEventRelation[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\StreamingProviderEventRelation>")
     * @Serializer\XmlList(inline=true, entry="StreamingProviderEventRelation")
     */
    private $_streamingProviderEventRelations;

    /**
     * @var EntityProperty[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EntityProperty>")
     * @Serializer\XmlList(inline=true, entry="EntityProperty")
     */
    private $_entityProperties;

    /**
     * @var Translation[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Translation>")
     * @Serializer\XmlList(inline=true, entry="Translation")
     */
    private $_translations;

    /**
     * @var Language[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Language>")
     * @Serializer\XmlList(inline=true, entry="Language")
     */
    private $_languages;

    /**
     * @var OutcomeStatus[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\OutcomeStatus>")
     * @Serializer\XmlList(inline=true, entry="OutcomeStatus")
     */
    private $_outcomeStatuses;

    /**
     * @var EventTemplate[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventTemplate>")
     * @Serializer\XmlList(inline=true, entry="EventTemplate")
     */
    private $_eventTemplates;

    /**
     * @var EntityPropertyType[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EntityPropertyType>")
     * @Serializer\XmlList(inline=true, entry="EntityPropertyType")
     */
    private $_entityPropertyTypes;

    /**
     * @var BettingOffer[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\BettingOffer>")
     * @Serializer\XmlList(inline=true, entry="BettingOffer")
     */
    private $_bettingOffers;

    /**
     * @var OutcomeTypeUsage[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\OutcomeTypeUsage>")
     * @Serializer\XmlList(inline=true, entry="OutcomeTypeUsage")
     */
    private $_outcomeTypeUsages;

    /**
     * @var EventAction[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventAction>")
     * @Serializer\XmlList(inline=true, entry="EventAction")
     */
    private $_eventActions;

    /**
     * @var EventType[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventType>")
     * @Serializer\XmlList(inline=true, entry="EventType")
     */
    private $_eventTypes;

    /**
     * @var Provider[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Provider>")
     * @Serializer\XmlList(inline=true, entry="Provider")
     */
    private $_providers;

    /**
     * @var Event[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Event>")
     * @Serializer\XmlList(inline=true, entry="Event")
     */
    private $_events;

    /**
     * @var ProviderEntityMapping[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ProviderEntityMapping>")
     * @Serializer\XmlList(inline=true, entry="ProviderEntityMapping")
     */
    private $_providerEntityMappings;

    /**
     * @var StreamingProvider[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\StreamingProvider>")
     * @Serializer\XmlList(inline=true, entry="StreamingProvider")
     */
    private $_streamingProviders;

    /**
     * @var OutcomeTypeBettingTypeRelation[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\OutcomeTypeBettingTypeRelation>")
     * @Serializer\XmlList(inline=true, entry="OutcomeTypeBettingTypeRelation")
     */
    private $_outcomeTypeBettingTypeRelations;

    /**
     * @var Outcome[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Outcome>")
     * @Serializer\XmlList(inline=true, entry="Outcome")
     */
    private $_outcomes;

    /**
     * @var EventActionDetail[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionDetail>")
     * @Serializer\XmlList(inline=true, entry="EventActionDetail")
     */
    private $_eventActionDetails;

    /**
     * @var Sport[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Sport>")
     * @Serializer\XmlList(inline=true, entry="Sport")
     */
    private $_sports;

    /**
     * @var EventActionDetailStatus[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionDetailStatus>")
     * @Serializer\XmlList(inline=true, entry="EventActionDetailStatus")
     */
    private $_eventActionDetailStatuses;

    /**
     * @var EventParticipantInfo[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfo>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfo")
     */
    private $_eventParticipantInfos;

    /**
     * @var EntityType[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EntityType>")
     * @Serializer\XmlList(inline=true, entry="EntityType")
     */
    private $_entityTypes;

    /**
     * @var ParticipantRole[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantRole>")
     * @Serializer\XmlList(inline=true, entry="ParticipantRole")
     */
    private $_participantRoles;

    /**
     * @var Currency[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Currency>")
     * @Serializer\XmlList(inline=true, entry="Currency")
     */
    private $_currencies;

    /**
     * @var EventParticipantInfoStatus[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoStatus>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoStatus")
     */
    private $_eventParticipantInfoStatuses;

    /**
     * @var EventParticipantRelation[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantRelation>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantRelation")
     */
    private $_eventParticipantRelations;

    /**
     * @var EventPartDefaultUsage[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventPartDefaultUsage>")
     * @Serializer\XmlList(inline=true, entry="EventPartDefaultUsage")
     */
    private $_eventPartDefaultUsages;

    /**
     * @var ParticipantRelation[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantRelation>")
     * @Serializer\XmlList(inline=true, entry="ParticipantRelation")
     */
    private $_participantRelations;

    /**
     * @var EventInfoType[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventInfoType>")
     * @Serializer\XmlList(inline=true, entry="EventInfoType")
     */
    private $_eventInfoTypes;

    /**
     * @var EventActionType[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionType>")
     * @Serializer\XmlList(inline=true, entry="EventActionType")
     */
    private $_eventActionTypes;

    /**
     * @var EventStatus[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventStatus>")
     * @Serializer\XmlList(inline=true, entry="EventStatus")
     */
    private $_eventStatuses;

    /**
     * @var LocationType[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\LocationType>")
     * @Serializer\XmlList(inline=true, entry="LocationType")
     */
    private $_locationTypes;

    /**
     * @var BettingTypeUsage[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\BettingTypeUsage>")
     * @Serializer\XmlList(inline=true, entry="BettingTypeUsage")
     */
    private $_bettingTypeUsages;

    /**
     * @var ProviderOutcomeRelation[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ProviderOutcomeRelation>")
     * @Serializer\XmlList(inline=true, entry="ProviderOutcomeRelation")
     */
    private $_providerOutcomeRelations;

    /**
     * @var EventInfoStatus[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventInfoStatus>")
     * @Serializer\XmlList(inline=true, entry="EventInfoStatus")
     */
    private $_eventInfoStatuses;

    /**
     * @var MarketOutcomeRelation[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\MarketOutcomeRelation>")
     * @Serializer\XmlList(inline=true, entry="MarketOutcomeRelation")
     */
    private $_marketOutcomeRelations;

    /**
     * @var ParticipantRelationType[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantRelationType>")
     * @Serializer\XmlList(inline=true, entry="ParticipantRelationType")
     */
    private $_participantRelationTypes;

    /**
     * @var ParticipantType[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantType>")
     * @Serializer\XmlList(inline=true, entry="ParticipantType")
     */
    private $_participantTypes;

    /**
     * @var Market[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Market>")
     * @Serializer\XmlList(inline=true, entry="Market")
     */
    private $_markets;

    /**
     * @var Location[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Location>")
     * @Serializer\XmlList(inline=true, entry="Location")
     */
    private $_locations;

    /**
     * @var ScoringUnit[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ScoringUnit>")
     * @Serializer\XmlList(inline=true, entry="ScoringUnit")
     */
    private $_scoringUnits;

    /**
     * @var BettingType[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\BettingType>")
     * @Serializer\XmlList(inline=true, entry="BettingType")
     */
    private $_bettingTypes;

    /**
     * @var LocationRelationType[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\LocationRelationType>")
     * @Serializer\XmlList(inline=true, entry="LocationRelationType")
     */
    private $_locationRelationTypes;

    /**
     * @var Participant[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Participant>")
     * @Serializer\XmlList(inline=true, entry="Participant")
     */
    private $_participants;

    /**
     * @var EventParticipantInfoDetailStatus[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoDetailStatus>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoDetailStatus")
     */
    private $_eventParticipantInfoDetailStatuses;

    /**
     * @var BettingOfferStatus[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\BettingOfferStatus>")
     * @Serializer\XmlList(inline=true, entry="BettingOfferStatus")
     */
    private $_bettingOfferStatuses;

    /**
     * @var ParticipantUsage[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantUsage>")
     * @Serializer\XmlList(inline=true, entry="ParticipantUsage")
     */
    private $_participantUsages;

    /**
     * @var EventParticipantInfoType[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoType>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoType")
     */
    private $_eventParticipantInfoTypes;

    /**
     * @var ProviderEventRelation[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ProviderEventRelation>")
     * @Serializer\XmlList(inline=true, entry="ProviderEventRelation")
     */
    private $_providerEventRelations;

    /**
     * @var EventParticipantInfoDetailType[]|null
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoDetailType>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoDetailType")
     */
    private $_eventParticipantInfoDetailTypes;

    /**
     * @return EventActionDetailType[]|null
     */
    public function getEventActionDetailTypes(): ?array
    {
        return $this->_eventActionDetailTypes;
    }

    /**
     * @return Source[]|null
     */
    public function getSources(): ?array
    {
        return $this->_sources;
    }

    /**
     * @return EventPart[]|null
     */
    public function getEventParts(): ?array
    {
        return $this->_eventParts;
    }

    /**
     * @return OutcomeType[]|null
     */
    public function getOutcomeTypes(): ?array
    {
        return $this->_outcomeTypes;
    }

    /**
     * @return EventInfo[]|null
     */
    public function getEventInfos(): ?array
    {
        return $this->_eventInfos;
    }

    /**
     * @return EventActionStatus[]|null
     */
    public function getEventActionStatuses(): ?array
    {
        return $this->_eventActionStatuses;
    }

    /**
     * @return EventParticipantInfoDetail[]|null
     */
    public function getEventParticipantInfoDetails(): ?array
    {
        return $this->_eventParticipantInfoDetails;
    }

    /**
     * @return LocationRelation[]|null
     */
    public function getLocationRelations(): ?array
    {
        return $this->_locationRelations;
    }

    /**
     * @return EventCategory[]|null
     */
    public function getEventCategories(): ?array
    {
        return $this->_eventCategories;
    }

    /**
     * @return StreamingProviderEventRelation[]|null
     */
    public function getStreamingProviderEventRelations(): ?array
    {
        return $this->_streamingProviderEventRelations;
    }

    /**
     * @return EntityProperty[]|null
     */
    public function getEntityProperties(): ?array
    {
        return $this->_entityProperties;
    }

    /**
     * @return Translation[]|null
     */
    public function getTranslations(): ?array
    {
        return $this->_translations;
    }

    /**
     * @return Language[]|null
     */
    public function getLanguages(): ?array
    {
        return $this->_languages;
    }

    /**
     * @return OutcomeStatus[]|null
     */
    public function getOutcomeStatuses(): ?array
    {
        return $this->_outcomeStatuses;
    }

    /**
     * @return EventTemplate[]|null
     */
    public function getEventTemplates(): ?array
    {
        return $this->_eventTemplates;
    }

    /**
     * @return EntityPropertyType[]|null
     */
    public function getEntityPropertyTypes(): ?array
    {
        return $this->_entityPropertyTypes;
    }

    /**
     * @return BettingOffer[]|null
     */
    public function getBettingOffers(): ?array
    {
        return $this->_bettingOffers;
    }

    /**
     * @return OutcomeTypeUsage[]|null
     */
    public function getOutcomeTypeUsages(): ?array
    {
        return $this->_outcomeTypeUsages;
    }

    /**
     * @return EventAction[]|null
     */
    public function getEventActions(): ?array
    {
        return $this->_eventActions;
    }

    /**
     * @return EventType[]|null
     */
    public function getEventTypes(): ?array
    {
        return $this->_eventTypes;
    }

    /**
     * @return Provider[]|null
     */
    public function getProviders(): ?array
    {
        return $this->_providers;
    }

    /**
     * @return Event[]|null
     */
    public function getEvents(): ?array
    {
        return $this->_events;
    }

    /**
     * @return ProviderEntityMapping[]|null
     */
    public function getProviderEntityMappings(): ?array
    {
        return $this->_providerEntityMappings;
    }

    /**
     * @return StreamingProvider[]|null
     */
    public function getStreamingProviders(): ?array
    {
        return $this->_streamingProviders;
    }

    /**
     * @return OutcomeTypeBettingTypeRelation[]|null
     */
    public function getOutcomeTypeBettingTypeRelations(): ?array
    {
        return $this->_outcomeTypeBettingTypeRelations;
    }

    /**
     * @return Outcome[]|null
     */
    public function getOutcomes(): ?array
    {
        return $this->_outcomes;
    }

    /**
     * @return EventActionDetail[]|null
     */
    public function getEventActionDetails(): ?array
    {
        return $this->_eventActionDetails;
    }

    /**
     * @return Sport[]|null
     */
    public function getSports(): ?array
    {
        return $this->_sports;
    }

    /**
     * @return EventActionDetailStatus[]|null
     */
    public function getEventActionDetailStatuses(): ?array
    {
        return $this->_eventActionDetailStatuses;
    }

    /**
     * @return EventParticipantInfo[]|null
     */
    public function getEventParticipantInfos(): ?array
    {
        return $this->_eventParticipantInfos;
    }

    /**
     * @return EntityType[]|null
     */
    public function getEntityTypes(): ?array
    {
        return $this->_entityTypes;
    }

    /**
     * @return ParticipantRole[]|null
     */
    public function getParticipantRoles(): ?array
    {
        return $this->_participantRoles;
    }

    /**
     * @return Currency[]|null
     */
    public function getCurrencies(): ?array
    {
        return $this->_currencies;
    }

    /**
     * @return EventParticipantInfoStatus[]|null
     */
    public function getEventParticipantInfoStatuses(): ?array
    {
        return $this->_eventParticipantInfoStatuses;
    }

    /**
     * @return EventParticipantRelation[]|null
     */
    public function getEventParticipantRelations(): ?array
    {
        return $this->_eventParticipantRelations;
    }

    /**
     * @return EventPartDefaultUsage[]|null
     */
    public function getEventPartDefaultUsages(): ?array
    {
        return $this->_eventPartDefaultUsages;
    }

    /**
     * @return ParticipantRelation[]|null
     */
    public function getParticipantRelations(): ?array
    {
        return $this->_participantRelations;
    }

    /**
     * @return EventInfoType[]|null
     */
    public function getEventInfoTypes(): ?array
    {
        return $this->_eventInfoTypes;
    }

    /**
     * @return EventActionType[]|null
     */
    public function getEventActionTypes(): ?array
    {
        return $this->_eventActionTypes;
    }

    /**
     * @return EventStatus[]|null
     */
    public function getEventStatuses(): ?array
    {
        return $this->_eventStatuses;
    }

    /**
     * @return LocationType[]|null
     */
    public function getLocationTypes(): ?array
    {
        return $this->_locationTypes;
    }

    /**
     * @return BettingTypeUsage[]|null
     */
    public function getBettingTypeUsages(): ?array
    {
        return $this->_bettingTypeUsages;
    }

    /**
     * @return EventInfoStatus[]|null
     */
    public function getEventInfoStatuses(): ?array
    {
        return $this->_eventInfoStatuses;
    }

    /**
     * @return MarketOutcomeRelation[]|null
     */
    public function getMarketOutcomeRelations(): ?array
    {
        return $this->_marketOutcomeRelations;
    }

    /**
     * @return ParticipantRelationType[]|null
     */
    public function getParticipantRelationTypes(): ?array
    {
        return $this->_participantRelationTypes;
    }

    /**
     * @return ParticipantType[]|null
     */
    public function getParticipantTypes(): ?array
    {
        return $this->_participantTypes;
    }

    /**
     * @return Market[]|null
     */
    public function getMarkets(): ?array
    {
        return $this->_markets;
    }

    /**
     * @return Location[]|null
     */
    public function getLocations(): ?array
    {
        return $this->_locations;
    }

    /**
     * @return ScoringUnit[]|null
     */
    public function getScoringUnits(): ?array
    {
        return $this->_scoringUnits;
    }

    /**
     * @return BettingType[]|null
     */
    public function getBettingTypes(): ?array
    {
        return $this->_bettingTypes;
    }

    /**
     * @return LocationRelationType[]|null
     */
    public function getLocationRelationTypes(): ?array
    {
        return $this->_locationRelationTypes;
    }

    /**
     * @return Participant[]|null
     */
    public function getParticipants(): ?array
    {
        return $this->_participants;
    }

    /**
     * @return EventParticipantInfoDetailStatus[]|null
     */
    public function getEventParticipantInfoDetailStatuses(): ?array
    {
        return $this->_eventParticipantInfoDetailStatuses;
    }

    /**
     * @return BettingOfferStatus[]|null
     */
    public function getBettingOfferStatuses(): ?array
    {
        return $this->_bettingOfferStatuses;
    }

    /**
     * @return ParticipantUsage[]|null
     */
    public function getParticipantUsages(): ?array
    {
        return $this->_participantUsages;
    }

    /**
     * @return EventParticipantInfoType[]|null
     */
    public function getEventParticipantInfoTypes(): ?array
    {
        return $this->_eventParticipantInfoTypes;
    }

    /**
     * @return ProviderEventRelation[]|null
     */
    public function getProviderEventRelations(): ?array
    {
        return $this->_providerEventRelations;
    }

    /**
     * @return EventParticipantInfoDetailType[]|null
     */
    public function getEventParticipantInfoDetailTypes(): ?array
    {
        return $this->_eventParticipantInfoDetailTypes;
    }

    /**
     * @return ProviderOutcomeRelation[]|null
     */
    public function getProviderOutcomeRelations(): ?array
    {
        return $this->_providerOutcomeRelations;
    }
}