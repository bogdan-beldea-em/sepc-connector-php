<?php


namespace OM\OddsMatrix\SEPC\Connector\Util;


use DateTime;
use Exception;
use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\XmlDeserializationVisitor;
use SimpleXMLElement;

class SDQLCustomDeserializationHandler implements SubscribingHandlerInterface
{
    /**
     * @return array
     */
    public static function getSubscribingMethods()
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => 'DateTime',
                'method' => 'deserializeDateTime',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => 'bool',
                'method' => 'deserializeBool',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => 'int',
                'method' => 'deserializeInt',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => 'float',
                'method' => 'deserializeInt',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => 'string',
                'method' => 'deserializeString',
            ]
        ];
    }

    /**
     * @param XmlDeserializationVisitor $visitor
     * @param SimpleXMLElement $element
     * @param array $type
     * @param Context $context
     * @return string|null
     */
    public function deserializeString(XmlDeserializationVisitor $visitor, SimpleXMLElement $element, array $type, Context $context)
    {
        $stringValue = (string)$element;

        if (is_null($stringValue)) {
            return null;
        }

        if ($stringValue == 'null') {
            return null;
        }

        return $stringValue;
    }

    /**
     * @param XmlDeserializationVisitor $visitor
     * @param SimpleXMLElement $element
     * @param array $type
     * @param Context $context
     * @return mixed|null
     */
    public function deserializeFloat(XmlDeserializationVisitor $visitor, SimpleXMLElement $element, array $type, Context $context)
    {
        $floatAsString = (string)$element;

        if (is_null($floatAsString)) {
            return null;
        }

        $result = filter_var($floatAsString, FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE);
        if (!is_null($result) && gettype($result) === 'double') {
            return $result;
        } else {
            return null;
        }
    }

    /**
     * @param XmlDeserializationVisitor $visitor
     * @param SimpleXMLElement $element
     * @param array $type
     * @param Context $context
     * @return mixed|null
     */
    public function deserializeInt(XmlDeserializationVisitor $visitor, SimpleXMLElement $element, array $type, Context $context)
    {
        $intAsString = (string)$element;

        if (is_null($intAsString)) {
            return null;
        }

        $result = filter_var($intAsString, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
        if (!is_null($result) && gettype($result) === 'integer') {
            return $result;
        } else {
            return null;
        }
    }

    /**
     * @param XmlDeserializationVisitor $visitor
     * @param SimpleXMLElement $element
     * @param array $type
     * @param Context $context
     * @return mixed|null
     */
    public function deserializeBool(XmlDeserializationVisitor $visitor, SimpleXMLElement $element, array $type, Context $context)
    {
        $boolAsString = (string)$element;

        if (is_null($boolAsString)) {
            return null;
        }

        $result = filter_var($boolAsString, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
        if (!is_null($result) && gettype($result) === 'boolean') {
            return $result;
        } else {
            return null;
        }
    }

    /**
     * @param XmlDeserializationVisitor $visitor
     * @param SimpleXMLElement $element
     * @param array $type
     * @param Context $context
     * @return DateTime|false|null
     */
    public function deserializeDateTime(XmlDeserializationVisitor $visitor, SimpleXMLElement $element, array $type, Context $context)
    {
        $dateAsString = (string)$element;

        if (null == $dateAsString) {
            return null;
        }

        try {
            $deserialized = DateTime::createFromFormat('Y-m-d H:i:s.v', $dateAsString);
            if (is_bool($deserialized)) {
                return null;
            } else {
                return $deserialized;
            }
        } catch (Exception $e) {
            return null;
        }
    }
}