<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class ParticipantRelationType
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="ParticipantRelationType")
 */
class ParticipantRelationType
{
    use IdentifiableModelTrait, VersionedTrait, NamedTrait;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("hasParamParticipantRole")
    * @Serializer\XmlAttribute()
    */
    private $_hasParamParticipantRole;

    /**
    * @var string|null
    *
    * @Serializer\Type("string")
    * @Serializer\SerializedName("paramParticipantRoleIdDescription")
    * @Serializer\XmlAttribute()
    */
    private $_paramParticipantRoleIdDescription;

    /**
     * @return bool|null
     */
    public function isHasParamParticipantRole(): ?bool
    {
        return $this->_hasParamParticipantRole;
    }

    /**
     * @return string|null
     */
    public function getParamParticipantRoleIdDescription(): ?string
    {
        return $this->_paramParticipantRoleIdDescription;
    }
}
