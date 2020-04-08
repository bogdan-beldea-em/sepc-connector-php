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
            ]
        ];
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