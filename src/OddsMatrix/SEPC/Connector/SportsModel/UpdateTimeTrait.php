<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;


use JMS\Serializer\Annotation as Serializer;

trait UpdateTimeTrait
{
    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
     * @Serializer\SerializedName("lastChangedTime")
     * @Serializer\XmlAttribute()
     */
    private $_lastChangedTime;

    /**
     * @return \DateTime
     */
    public function getLastChangedTime(): \DateTime
    {
        return $this->_lastChangedTime;
    }
}