<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;


use JMS\Serializer\Annotation as Serializer;

trait EntitiesTrait
{
    /**
     * @var EventActionDetailType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionDetailType>")
     * @Serializer\XmlList(inline=true, entry="EventActionDetailType")
     */
    private $_eventActionDetailTypes = [];

    /**
     * @var EventActionDetailTypeUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionDetailTypeUsage>")
     * @Serializer\XmlList(inline=true, entry="EventActionDetailTypeUsage")
     */
    private $_eventActionDetailTypeUsages = [];

    /**
     * @var Source[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Source>")
     * @Serializer\XmlList(inline=true, entry="Source")
     */
    private $_sources = [];

    /**
     * @var EventPart[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventPart>")
     * @Serializer\XmlList(inline=true, entry="EventPart")
     */
    private $_eventParts = [];

    /**
     * @var OutcomeType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\OutcomeType>")
     * @Serializer\XmlList(inline=true, entry="OutcomeType")
     */
    private $_outcomeTypes = [];

    /**
     * @var EventInfo[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventInfo>")
     * @Serializer\XmlList(inline=true, entry="EventInfo")
     */
    private $_eventInfos = [];

    /**
     * @var EventActionStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionStatus>")
     * @Serializer\XmlList(inline=true, entry="EventActionStatus")
     */
    private $_eventActionStatuses = [];

    /**
     * @var EventParticipantInfoDetail[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoDetail>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoDetail")
     */
    private $_eventParticipantInfoDetails = [];

    /**
     * @var LocationRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\LocationRelation>")
     * @Serializer\XmlList(inline=true, entry="LocationRelation")
     */
    private $_locationRelations = [];

    /**
     * @var EventCategory[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventCategory>")
     * @Serializer\XmlList(inline=true, entry="EventCategory")
     */
    private $_eventCategories = [];

    /**
     * @var StreamingProviderEventRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\StreamingProviderEventRelation>")
     * @Serializer\XmlList(inline=true, entry="StreamingProviderEventRelation")
     */
    private $_streamingProviderEventRelations = [];

    /**
     * @var EntityProperty[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EntityProperty>")
     * @Serializer\XmlList(inline=true, entry="EntityProperty")
     */
    private $_entityProperties = [];

    /**
     * @var Translation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Translation>")
     * @Serializer\XmlList(inline=true, entry="Translation")
     */
    private $_translations = [];

    /**
     * @var Language[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Language>")
     * @Serializer\XmlList(inline=true, entry="Language")
     */
    private $_languages = [];

    /**
     * @var OutcomeStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\OutcomeStatus>")
     * @Serializer\XmlList(inline=true, entry="OutcomeStatus")
     */
    private $_outcomeStatuses = [];

    /**
     * @var EventTemplate[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventTemplate>")
     * @Serializer\XmlList(inline=true, entry="EventTemplate")
     */
    private $_eventTemplates = [];

    /**
     * @var EntityPropertyType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EntityPropertyType>")
     * @Serializer\XmlList(inline=true, entry="EntityPropertyType")
     */
    private $_entityPropertyTypes = [];

    /**
     * @var BettingOffer[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\BettingOffer>")
     * @Serializer\XmlList(inline=true, entry="BettingOffer")
     */
    private $_bettingOffers = [];

    /**
     * @var OutcomeTypeUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\OutcomeTypeUsage>")
     * @Serializer\XmlList(inline=true, entry="OutcomeTypeUsage")
     */
    private $_outcomeTypeUsages = [];

    /**
     * @var EventAction[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventAction>")
     * @Serializer\XmlList(inline=true, entry="EventAction")
     */
    private $_eventActions = [];

    /**
     * @var EventType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventType>")
     * @Serializer\XmlList(inline=true, entry="EventType")
     */
    private $_eventTypes = [];

    /**
     * @var Provider[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Provider>")
     * @Serializer\XmlList(inline=true, entry="Provider")
     */
    private $_providers = [];

    /**
     * @var Event[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Event>")
     * @Serializer\XmlList(inline=true, entry="Event")
     */
    private $_events = [];

    /**
     * @var ProviderEntityMapping[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ProviderEntityMapping>")
     * @Serializer\XmlList(inline=true, entry="ProviderEntityMapping")
     */
    private $_providerEntityMappings = [];

    /**
     * @var StreamingProvider[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\StreamingProvider>")
     * @Serializer\XmlList(inline=true, entry="StreamingProvider")
     */
    private $_streamingProviders = [];

    /**
     * @var OutcomeTypeBettingTypeRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\OutcomeTypeBettingTypeRelation>")
     * @Serializer\XmlList(inline=true, entry="OutcomeTypeBettingTypeRelation")
     */
    private $_outcomeTypeBettingTypeRelations = [];

    /**
     * @var Outcome[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Outcome>")
     * @Serializer\XmlList(inline=true, entry="Outcome")
     */
    private $_outcomes = [];

    /**
     * @var EventActionDetail[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionDetail>")
     * @Serializer\XmlList(inline=true, entry="EventActionDetail")
     */
    private $_eventActionDetails = [];

    /**
     * @var Sport[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Sport>")
     * @Serializer\XmlList(inline=true, entry="Sport")
     */
    private $_sports = [];

    /**
     * @var EventActionDetailStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionDetailStatus>")
     * @Serializer\XmlList(inline=true, entry="EventActionDetailStatus")
     */
    private $_eventActionDetailStatuses = [];

    /**
     * @var EventParticipantInfo[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfo>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfo")
     */
    private $_eventParticipantInfos = [];

    /**
     * @var EntityType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EntityType>")
     * @Serializer\XmlList(inline=true, entry="EntityType")
     */
    private $_entityTypes = [];

    /**
     * @var ParticipantRole[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantRole>")
     * @Serializer\XmlList(inline=true, entry="ParticipantRole")
     */
    private $_participantRoles = [];

    /**
     * @var Currency[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Currency>")
     * @Serializer\XmlList(inline=true, entry="Currency")
     */
    private $_currencies = [];

    /**
     * @var EventParticipantInfoStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoStatus>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoStatus")
     */
    private $_eventParticipantInfoStatuses = [];

    /**
     * @var EventParticipantRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantRelation>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantRelation")
     */
    private $_eventParticipantRelations = [];

    /**
     * @var EventPartDefaultUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventPartDefaultUsage>")
     * @Serializer\XmlList(inline=true, entry="EventPartDefaultUsage")
     */
    private $_eventPartDefaultUsages = [];

    /**
     * @var ParticipantRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantRelation>")
     * @Serializer\XmlList(inline=true, entry="ParticipantRelation")
     */
    private $_participantRelations = [];

    /**
     * @var EventInfoType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventInfoType>")
     * @Serializer\XmlList(inline=true, entry="EventInfoType")
     */
    private $_eventInfoTypes = [];

    /**
     * @var EventInfoTypeUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventInfoTypeUsage>")
     * @Serializer\XmlList(inline=true, entry="EventInfoTypeUsage")
     */
    private $_eventInfoTypeUsages = [];

    /**
     * @var EventActionType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionType>")
     * @Serializer\XmlList(inline=true, entry="EventActionType")
     */
    private $_eventActionTypes = [];

    /**
     * @var EventActionTypeUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventActionTypeUsage>")
     * @Serializer\XmlList(inline=true, entry="EventActionTypeUsage")
     */
    private $_eventActionTypeUsages = [];

    /**
     * @var EventStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventStatus>")
     * @Serializer\XmlList(inline=true, entry="EventStatus")
     */
    private $_eventStatuses = [];

    /**
     * @var LocationType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\LocationType>")
     * @Serializer\XmlList(inline=true, entry="LocationType")
     */
    private $_locationTypes = [];

    /**
     * @var BettingTypeUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\BettingTypeUsage>")
     * @Serializer\XmlList(inline=true, entry="BettingTypeUsage")
     */
    private $_bettingTypeUsages = [];

    /**
     * @var ProviderOutcomeRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ProviderOutcomeRelation>")
     * @Serializer\XmlList(inline=true, entry="ProviderOutcomeRelation")
     */
    private $_providerOutcomeRelations = [];

    /**
     * @var EventInfoStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventInfoStatus>")
     * @Serializer\XmlList(inline=true, entry="EventInfoStatus")
     */
    private $_eventInfoStatuses = [];

    /**
     * @var MarketOutcomeRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\MarketOutcomeRelation>")
     * @Serializer\XmlList(inline=true, entry="MarketOutcomeRelation")
     */
    private $_marketOutcomeRelations = [];

    /**
     * @var ParticipantRelationType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantRelationType>")
     * @Serializer\XmlList(inline=true, entry="ParticipantRelationType")
     */
    private $_participantRelationTypes = [];

    /**
     * @var ParticipantType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantType>")
     * @Serializer\XmlList(inline=true, entry="ParticipantType")
     */
    private $_participantTypes = [];

    /**
     * @var Market[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Market>")
     * @Serializer\XmlList(inline=true, entry="Market")
     */
    private $_markets = [];

    /**
     * @var Location[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Location>")
     * @Serializer\XmlList(inline=true, entry="Location")
     */
    private $_locations = [];

    /**
     * @var ScoringUnit[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ScoringUnit>")
     * @Serializer\XmlList(inline=true, entry="ScoringUnit")
     */
    private $_scoringUnits = [];

    /**
     * @var BettingType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\BettingType>")
     * @Serializer\XmlList(inline=true, entry="BettingType")
     */
    private $_bettingTypes = [];

    /**
     * @var LocationRelationType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\LocationRelationType>")
     * @Serializer\XmlList(inline=true, entry="LocationRelationType")
     */
    private $_locationRelationTypes = [];

    /**
     * @var Participant[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\Participant>")
     * @Serializer\XmlList(inline=true, entry="Participant")
     */
    private $_participants = [];

    /**
     * @var EventParticipantInfoDetailStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoDetailStatus>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoDetailStatus")
     */
    private $_eventParticipantInfoDetailStatuses = [];

    /**
     * @var BettingOfferStatus[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\BettingOfferStatus>")
     * @Serializer\XmlList(inline=true, entry="BettingOfferStatus")
     */
    private $_bettingOfferStatuses = [];

    /**
     * @var ParticipantUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantUsage>")
     * @Serializer\XmlList(inline=true, entry="ParticipantUsage")
     */
    private $_participantUsages = [];

    /**
     * @var EventParticipantInfoType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoType>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoType")
     */
    private $_eventParticipantInfoTypes = [];

    /**
     * @var EventParticipantInfoTypeUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoTypeUsage>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoTypeUsage")
     */
    private $_eventParticipantInfoTypeUsages = [];

    /**
     * @var ProviderEventRelation[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\ProviderEventRelation>")
     * @Serializer\XmlList(inline=true, entry="ProviderEventRelation")
     */
    private $_providerEventRelations = [];

    /**
     * @var EventParticipantInfoDetailType[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoDetailType>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoDetailType")
     */
    private $_eventParticipantInfoDetailTypes = [];

    /**
     * @var EventParticipantInfoDetailTypeUsage[]
     *
     * @Serializer\Type("array<OM\OddsMatrix\SEPC\Connector\SportsModel\EventParticipantInfoDetailTypeUsage>")
     * @Serializer\XmlList(inline=true, entry="EventParticipantInfoDetailTypeUsage")
     */
    private $_eventParticipantInfoDetailTypeUsages = [];

    /**
     * @return EventActionDetailType[]
     */
    public function getEventActionDetailTypes(): array
    {
        return $this->_eventActionDetailTypes;
    }

    /**
     * @return Source[]
     */
    public function getSources(): array
    {
        return $this->_sources;
    }

    /**
     * @return EventPart[]
     */
    public function getEventParts(): array
    {
        return $this->_eventParts;
    }

    /**
     * @return OutcomeType[]
     */
    public function getOutcomeTypes(): array
    {
        return $this->_outcomeTypes;
    }

    /**
     * @return EventInfo[]
     */
    public function getEventInfos(): array
    {
        return $this->_eventInfos;
    }

    /**
     * @return EventActionStatus[]
     */
    public function getEventActionStatuses(): array
    {
        return $this->_eventActionStatuses;
    }

    /**
     * @return EventParticipantInfoDetail[]
     */
    public function getEventParticipantInfoDetails(): array
    {
        return $this->_eventParticipantInfoDetails;
    }

    /**
     * @return LocationRelation[]
     */
    public function getLocationRelations(): array
    {
        return $this->_locationRelations;
    }

    /**
     * @return EventCategory[]
     */
    public function getEventCategories(): array
    {
        return $this->_eventCategories;
    }

    /**
     * @return StreamingProviderEventRelation[]
     */
    public function getStreamingProviderEventRelations(): array
    {
        return $this->_streamingProviderEventRelations;
    }

    /**
     * @return EntityProperty[]
     */
    public function getEntityProperties(): array
    {
        return $this->_entityProperties;
    }

    /**
     * @return Translation[]
     */
    public function getTranslations(): array
    {
        return $this->_translations;
    }

    /**
     * @return Language[]
     */
    public function getLanguages(): array
    {
        return $this->_languages;
    }

    /**
     * @return OutcomeStatus[]
     */
    public function getOutcomeStatuses(): array
    {
        return $this->_outcomeStatuses;
    }

    /**
     * @return EventTemplate[]
     */
    public function getEventTemplates(): array
    {
        return $this->_eventTemplates;
    }

    /**
     * @return EntityPropertyType[]
     */
    public function getEntityPropertyTypes(): array
    {
        return $this->_entityPropertyTypes;
    }

    /**
     * @return BettingOffer[]
     */
    public function getBettingOffers(): array
    {
        return $this->_bettingOffers;
    }

    /**
     * @return OutcomeTypeUsage[]
     */
    public function getOutcomeTypeUsages(): array
    {
        return $this->_outcomeTypeUsages;
    }

    /**
     * @return EventAction[]
     */
    public function getEventActions(): array
    {
        return $this->_eventActions;
    }

    /**
     * @return EventType[]
     */
    public function getEventTypes(): array
    {
        return $this->_eventTypes;
    }

    /**
     * @return Provider[]
     */
    public function getProviders(): array
    {
        return $this->_providers;
    }

    /**
     * @return Event[]
     */
    public function getEvents(): array
    {
        return $this->_events;
    }

    /**
     * @return ProviderEntityMapping[]
     */
    public function getProviderEntityMappings(): array
    {
        return $this->_providerEntityMappings;
    }

    /**
     * @return StreamingProvider[]
     */
    public function getStreamingProviders(): array
    {
        return $this->_streamingProviders;
    }

    /**
     * @return OutcomeTypeBettingTypeRelation[]
     */
    public function getOutcomeTypeBettingTypeRelations(): array
    {
        return $this->_outcomeTypeBettingTypeRelations;
    }

    /**
     * @return Outcome[]
     */
    public function getOutcomes(): array
    {
        return $this->_outcomes;
    }

    /**
     * @return EventActionDetail[]
     */
    public function getEventActionDetails(): array
    {
        return $this->_eventActionDetails;
    }

    /**
     * @return Sport[]
     */
    public function getSports(): array
    {
        return $this->_sports;
    }

    /**
     * @return EventActionDetailStatus[]
     */
    public function getEventActionDetailStatuses(): array
    {
        return $this->_eventActionDetailStatuses;
    }

    /**
     * @return EventParticipantInfo[]
     */
    public function getEventParticipantInfos(): array
    {
        return $this->_eventParticipantInfos;
    }

    /**
     * @return EntityType[]
     */
    public function getEntityTypes(): array
    {
        return $this->_entityTypes;
    }

    /**
     * @return ParticipantRole[]
     */
    public function getParticipantRoles(): array
    {
        return $this->_participantRoles;
    }

    /**
     * @return Currency[]
     */
    public function getCurrencies(): array
    {
        return $this->_currencies;
    }

    /**
     * @return EventParticipantInfoStatus[]
     */
    public function getEventParticipantInfoStatuses(): array
    {
        return $this->_eventParticipantInfoStatuses;
    }

    /**
     * @return EventParticipantRelation[]
     */
    public function getEventParticipantRelations(): array
    {
        return $this->_eventParticipantRelations;
    }

    /**
     * @return EventPartDefaultUsage[]
     */
    public function getEventPartDefaultUsages(): array
    {
        return $this->_eventPartDefaultUsages;
    }

    /**
     * @return ParticipantRelation[]
     */
    public function getParticipantRelations(): array
    {
        return $this->_participantRelations;
    }

    /**
     * @return EventInfoType[]
     */
    public function getEventInfoTypes(): array
    {
        return $this->_eventInfoTypes;
    }

    /**
     * @return EventActionType[]
     */
    public function getEventActionTypes(): array
    {
        return $this->_eventActionTypes;
    }

    /**
     * @return EventStatus[]
     */
    public function getEventStatuses(): array
    {
        return $this->_eventStatuses;
    }

    /**
     * @return LocationType[]
     */
    public function getLocationTypes(): array
    {
        return $this->_locationTypes;
    }

    /**
     * @return BettingTypeUsage[]
     */
    public function getBettingTypeUsages(): array
    {
        return $this->_bettingTypeUsages;
    }

    /**
     * @return EventInfoStatus[]
     */
    public function getEventInfoStatuses(): array
    {
        return $this->_eventInfoStatuses;
    }

    /**
     * @return MarketOutcomeRelation[]
     */
    public function getMarketOutcomeRelations(): array
    {
        return $this->_marketOutcomeRelations;
    }

    /**
     * @return ParticipantRelationType[]
     */
    public function getParticipantRelationTypes(): array
    {
        return $this->_participantRelationTypes;
    }

    /**
     * @return ParticipantType[]
     */
    public function getParticipantTypes(): array
    {
        return $this->_participantTypes;
    }

    /**
     * @return Market[]
     */
    public function getMarkets(): array
    {
        return $this->_markets;
    }

    /**
     * @return Location[]
     */
    public function getLocations(): array
    {
        return $this->_locations;
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
     * @return LocationRelationType[]
     */
    public function getLocationRelationTypes(): array
    {
        return $this->_locationRelationTypes;
    }

    /**
     * @return Participant[]
     */
    public function getParticipants(): array
    {
        return $this->_participants;
    }

    /**
     * @return EventParticipantInfoDetailStatus[]
     */
    public function getEventParticipantInfoDetailStatuses(): array
    {
        return $this->_eventParticipantInfoDetailStatuses;
    }

    /**
     * @return BettingOfferStatus[]
     */
    public function getBettingOfferStatuses(): array
    {
        return $this->_bettingOfferStatuses;
    }

    /**
     * @return ParticipantUsage[]
     */
    public function getParticipantUsages(): array
    {
        return $this->_participantUsages;
    }

    /**
     * @return EventParticipantInfoType[]
     */
    public function getEventParticipantInfoTypes(): array
    {
        return $this->_eventParticipantInfoTypes;
    }

    /**
     * @return ProviderEventRelation[]
     */
    public function getProviderEventRelations(): array
    {
        return $this->_providerEventRelations;
    }

    /**
     * @return EventParticipantInfoDetailType[]
     */
    public function getEventParticipantInfoDetailTypes(): array
    {
        return $this->_eventParticipantInfoDetailTypes;
    }

    /**
     * @return ProviderOutcomeRelation[]
     */
    public function getProviderOutcomeRelations(): array
    {
        return $this->_providerOutcomeRelations;
    }

    public function addEntity(array $entity): void
    {
        $entityClass = $entity['entityClass'];

        if ($entityClass === 'BettingOffer') $this->_bettingOffers[] = BettingOffer::wrap($entity);
        else if ($entityClass === 'BettingOfferStatus') $this->_bettingOfferStatuses[] = BettingOfferStatus::wrap($entity);
        else if ($entityClass === 'BettingType') $this->_bettingTypes[] = BettingType::wrap($entity);
        else if ($entityClass === 'BettingTypeUsage') $this->_bettingTypeUsages[] = BettingTypeUsage::wrap($entity);
        else if ($entityClass === 'Currency') $this->_currencies[] = Currency::wrap($entity);
        else if ($entityClass === 'EntityProperty') $this->_entityProperties[] = EntityProperty::wrap($entity);
        else if ($entityClass === 'EntityPropertyType') $this->_entityPropertyTypes[] = EntityPropertyType::wrap($entity);
        else if ($entityClass === 'EntityType') $this->_entityTypes[] = EntityType::wrap($entity);
        else if ($entityClass === 'Event') $this->_events[] = Event::wrap($entity);
        else if ($entityClass === 'EventAction') $this->_eventActions[] = EventAction::wrap($entity);
        else if ($entityClass === 'EventActionDetail') $this->_eventActionDetails[] = EventActionDetail::wrap($entity);
        else if ($entityClass === 'EventActionDetailStatus') $this->_eventActionDetailStatuses[] = EventActionDetailStatus::wrap($entity);
        else if ($entityClass === 'EventActionDetailType') $this->_eventActionDetailTypes[] = EventActionDetailType::wrap($entity);
        else if ($entityClass === 'EventActionDetailTypeUsage') $this->_eventActionDetailTypeUsages[] = EventActionDetailTypeUsage::wrap($entity);
        else if ($entityClass === 'EventActionStatus') $this->_eventActionStatuses[] = EventActionStatus::wrap($entity);
        else if ($entityClass === 'EventActionType') $this->_eventActionTypes[] = EventActionType::wrap($entity);
        else if ($entityClass === 'EventActionTypeUsage') $this->_eventActionTypeUsages[] = EventActionTypeUsage::wrap($entity);
        else if ($entityClass === 'EventCategory') $this->_eventCategories[] = EventCategory::wrap($entity);
        else if ($entityClass === 'EventInfo') $this->_eventInfos[] = EventInfo::wrap($entity);
        else if ($entityClass === 'EventInfoStatus') $this->_eventInfoStatuses[] = EventInfoStatus::wrap($entity);
        else if ($entityClass === 'EventInfoType') $this->_eventInfoTypes[] = EventInfoType::wrap($entity);
        else if ($entityClass === 'EventInfoTypeUsage') $this->_eventInfoTypeUsages[] = EventInfoTypeUsage::wrap($entity);
        else if ($entityClass === 'EventPart') $this->_eventParts[] = EventPart::wrap($entity);
        else if ($entityClass === 'EventPartDefaultUsage') $this->_eventPartDefaultUsages[] = EventPartDefaultUsage::wrap($entity);
        else if ($entityClass === 'EventParticipantInfo') $this->_eventParticipantInfos[] = EventParticipantInfo::wrap($entity);
        else if ($entityClass === 'EventParticipantInfoDetail') $this->_eventParticipantInfoDetails[] = EventParticipantInfoDetail::wrap($entity);
        else if ($entityClass === 'EventParticipantInfoDetailStatus') $this->_eventParticipantInfoDetailStatuses[] = EventParticipantInfoDetailStatus::wrap($entity);
        else if ($entityClass === 'EventParticipantInfoDetailType') $this->_eventParticipantInfoDetailTypes[] = EventParticipantInfoDetailType::wrap($entity);
        else if ($entityClass === 'EventParticipantInfoDetailTypeUsage') $this->_eventParticipantInfoDetailTypeUsages[] = EventParticipantInfoDetailTypeUsage::wrap($entity);
        else if ($entityClass === 'EventParticipantInfoStatus') $this->_eventParticipantInfoStatuses[] = EventParticipantInfoStatus::wrap($entity);
        else if ($entityClass === 'EventParticipantInfoType') $this->_eventParticipantInfoTypes[] = EventParticipantInfoType::wrap($entity);
        else if ($entityClass === 'EventParticipantInfoTypeUsage') $this->_eventParticipantInfoTypeUsages[] = EventParticipantInfoTypeUsage::wrap($entity);
        else if ($entityClass === 'EventParticipantRelation') $this->_eventParticipantRelations[] = EventParticipantRelation::wrap($entity);
        else if ($entityClass === 'EventStatus') $this->_eventStatuses[] = EventStatus::wrap($entity);
        else if ($entityClass === 'EventTemplate') $this->_eventTemplates[] = EventTemplate::wrap($entity);
        else if ($entityClass === 'EventType') $this->_eventTypes[] = EventType::wrap($entity);
        else if ($entityClass === 'Language') $this->_languages[] = Language::wrap($entity);
        else if ($entityClass === 'Location') $this->_locations[] = Location::wrap($entity);
        else if ($entityClass === 'LocationRelation') $this->_locationRelations[] = LocationRelation::wrap($entity);
        else if ($entityClass === 'LocationRelationType') $this->_locationRelationTypes[] = LocationRelationType::wrap($entity);
        else if ($entityClass === 'LocationType') $this->_locationTypes[] = LocationType::wrap($entity);
        else if ($entityClass === 'Market') $this->_markets[] = Market::wrap($entity);
        else if ($entityClass === 'MarketOutcomeRelation') $this->_marketOutcomeRelations[] = MarketOutcomeRelation::wrap($entity);
        else if ($entityClass === 'Outcome') $this->_outcomes[] = Outcome::wrap($entity);
        else if ($entityClass === 'OutcomeStatus') $this->_outcomeStatuses[] = OutcomeStatus::wrap($entity);
        else if ($entityClass === 'OutcomeType') $this->_outcomeTypes[] = OutcomeType::wrap($entity);
        else if ($entityClass === 'OutcomeTypeBettingTypeRelation') $this->_outcomeTypeBettingTypeRelations[] = OutcomeTypeBettingTypeRelation::wrap($entity);
        else if ($entityClass === 'OutcomeTypeUsage') $this->_outcomeTypeUsages[] = OutcomeTypeUsage::wrap($entity);
        else if ($entityClass === 'Participant') $this->_participants[] = Participant::wrap($entity);
        else if ($entityClass === 'ParticipantRelation') $this->_participantRelations[] = ParticipantRelation::wrap($entity);
        else if ($entityClass === 'ParticipantRelationType') $this->_participantRelationTypes[] = ParticipantRelationType::wrap($entity);
        else if ($entityClass === 'ParticipantRole') $this->_participantRoles[] = ParticipantRole::wrap($entity);
        else if ($entityClass === 'ParticipantType') $this->_participantTypes[] = ParticipantType::wrap($entity);
        else if ($entityClass === 'ParticipantUsage') $this->_participantUsages[] = ParticipantUsage::wrap($entity);
        else if ($entityClass === 'Provider') $this->_providers[] = Provider::wrap($entity);
        else if ($entityClass === 'ProviderEntityMapping') $this->_providerEntityMappings[] = ProviderEntityMapping::wrap($entity);
        else if ($entityClass === 'ProviderEventRelation') $this->_providerEventRelations[] = ProviderEventRelation::wrap($entity);
        else if ($entityClass === 'ProviderOutcomeRelation') $this->_providerOutcomeRelations[] = ProviderOutcomeRelation::wrap($entity);
        else if ($entityClass === 'ScoringUnit') $this->_scoringUnits[] = ScoringUnit::wrap($entity);
        else if ($entityClass === 'Source') $this->_sources[] = Source::wrap($entity);
        else if ($entityClass === 'Sport') $this->_sports[] = Sport::wrap($entity);
        else if ($entityClass === 'StreamingProvider') $this->_streamingProviders[] = StreamingProvider::wrap($entity);
        else if ($entityClass === 'StreamingProviderEventRelation') $this->_streamingProviderEventRelations[] = StreamingProviderEventRelation::wrap($entity);
        else if ($entityClass === 'Translation') $this->_translations[] = Translation::wrap($entity);
        else throw new \Exception("Unknown entity class: $entityClass");
    }

    /**
     * @return Stringable[]
     */
    public function getAll(): array
    {
        /** @var Stringable[] $result */
        $result = [];

        $arrays = array(
            $this->_eventActionDetailTypes,
            $this->_sources,
            $this->_eventParts,
            $this->_outcomeTypes,
            $this->_eventInfos,
            $this->_eventActionStatuses,
            $this->_eventParticipantInfoDetails,
            $this->_locationRelations,
            $this->_eventCategories,
            $this->_streamingProviderEventRelations,
            $this->_entityProperties,
            $this->_translations,
            $this->_languages,
            $this->_outcomeStatuses,
            $this->_eventTemplates,
            $this->_entityPropertyTypes,
            $this->_bettingOffers,
            $this->_outcomeTypeUsages,
            $this->_eventActions,
            $this->_eventTypes,
            $this->_providers,
            $this->_events,
            $this->_providerEntityMappings,
            $this->_streamingProviders,
            $this->_outcomeTypeBettingTypeRelations,
            $this->_outcomes,
            $this->_eventActionDetails,
            $this->_sports,
            $this->_eventActionDetailStatuses,
            $this->_eventParticipantInfos,
            $this->_entityTypes,
            $this->_participantRoles,
            $this->_currencies,
            $this->_eventParticipantInfoStatuses,
            $this->_eventParticipantRelations,
            $this->_eventPartDefaultUsages,
            $this->_participantRelations,
            $this->_eventInfoTypes,
            $this->_eventActionTypes,
            $this->_eventStatuses,
            $this->_locationTypes,
            $this->_bettingTypeUsages,
            $this->_providerOutcomeRelations,
            $this->_eventInfoStatuses,
            $this->_marketOutcomeRelations,
            $this->_participantRelationTypes,
            $this->_participantTypes,
            $this->_markets,
            $this->_locations,
            $this->_scoringUnits,
            $this->_bettingTypes,
            $this->_locationRelationTypes,
            $this->_participants,
            $this->_eventParticipantInfoDetailStatuses,
            $this->_bettingOfferStatuses,
            $this->_participantUsages,
            $this->_eventParticipantInfoTypes,
            $this->_providerEventRelations,
            $this->_eventParticipantInfoDetailTypes
        );

        foreach ($arrays as $array) {
            if (!is_null($array)) {
                $result = array_merge($result, $array);
            }
        }

        return $result;
    }
}
