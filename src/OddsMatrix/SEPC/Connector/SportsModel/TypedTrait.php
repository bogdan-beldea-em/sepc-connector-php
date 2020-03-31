<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;


use JMS\Serializer\Annotation as Serializer;

trait TypedTrait
{
    /**
     * @var string|null
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("type")
     * @Serializer\XmlAttribute()
     */
    protected $_type;

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->_type;
    }
}