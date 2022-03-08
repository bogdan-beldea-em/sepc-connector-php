<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

use JMS\Serializer\Annotation as Serializer;

/**
 * Class InitialData
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 *
 * @Serializer\XmlRoot(name="InitialData")
 */
class InitialData
{
    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("batchId")
    * @Serializer\XmlAttribute()
    */
    private $_batchId;

    /**
    * @var int|null
    *
    * @Serializer\Type("int")
    * @Serializer\SerializedName("batchesLeft")
    * @Serializer\XmlAttribute()
    */
    private $_batchesLeft;

    /**
    * @var bool|null
    *
    * @Serializer\Type("bool")
    * @Serializer\SerializedName("dumpComplete")
    * @Serializer\XmlAttribute()
    */
    private $_dumpComplete;

    /**
     * @var EntitiesContainer
     *
     * @Serializer\Type("OM\OddsMatrix\SEPC\Connector\SportsModel\EntitiesContainer")
     * @Serializer\SerializedName("entities")
     * @Serializer\XmlElement()
     */
    private $_entities;

    public function __construct(array $array = null)
    {
        if (is_null($array)) {
            return;
        }

        $this->_entities = new EntitiesContainer();

        if (!is_null($array['entities'])) {
            foreach ($array['entities'] as $entity) {
                $this->_entities->addEntity($entity);
            }
        }

        $this->_dumpComplete = $array['dumpComplete'];
        $this->_batchId = $array['batchId'];
        $this->_batchesLeft = $array['batchesLeft'];
    }

    public static function wrap($wrapped_obj): InitialData
    {
        return new InitialData($wrapped_obj);
    }

    /**
     * @return int|null
     */
    public function getBatchId(): ?int
    {
        return $this->_batchId;
    }

    /**
     * @return int|null
     */
    public function getBatchesLeft(): ?int
    {
        return $this->_batchesLeft;
    }

    /**
     * @return bool|null
     */
    public function isDumpComplete(): ?bool
    {
        return $this->_dumpComplete;
    }

    /**
     * @return EntitiesContainer
     */
    public function getEntities(): EntitiesContainer
    {
        return $this->_entities;
    }
}
