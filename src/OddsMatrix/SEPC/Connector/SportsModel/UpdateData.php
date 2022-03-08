<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;
use OM\OddsMatrix\SEPC\Connector\Util\DateTimeUtil;

/**
 * Class UpdateData
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="UpdateData")
 */
class UpdateData
{
    use EntitiesTrait;

    public function __construct(array $array = null)
    {
        if (is_null($array)) {
            return;
        }

        if (!is_null($array['changes'])) {
            foreach ($array['changes'] as $change) {
                $this->addEntity($change);
            }
        }

        $this->_batchId = $array['batchId'];
        $this->_batchUuid = $array['batchUuid'];
        $this->_createdTime = DateTimeUtil::stringToDateTime($array['createdTime']);
    }

    public static function wrap(array $wrapped_obj): UpdateData
    {
        return new UpdateData($wrapped_obj);
    }

    /**
     * @var int
     *
     * @Serializer\Type("int")
     * @Serializer\SerializedName("batchId")
     * @Serializer\XmlAttribute()
     */
    private $_batchId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("batchUuid")
     * @Serializer\XmlAttribute()
     */
    private $_batchUuid;

    /**
     * @var \DateTime
     *
     * @Serializer\Type("DateTime<'Y-m-d H:i:s.v'>")
     * @Serializer\SerializedName("createdTime")
     * @Serializer\XmlAttribute()
     */
    private $_createdTime;

    /**
     * @return int
     */
    public function getBatchId(): int
    {
        return $this->_batchId;
    }

    /**
     * @return string
     */
    public function getBatchUuid(): string
    {
        return $this->_batchUuid;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedTime(): \DateTime
    {
        return $this->_createdTime;
    }
}
