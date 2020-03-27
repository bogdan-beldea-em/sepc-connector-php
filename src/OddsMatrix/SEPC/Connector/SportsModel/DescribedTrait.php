<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;


trait DescribedTrait
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("description")
     * @Serializer\XmlAttribute()
     */
    private $_description;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->_description;
    }
}