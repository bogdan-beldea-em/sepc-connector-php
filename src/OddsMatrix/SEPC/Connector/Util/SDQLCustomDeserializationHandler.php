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

        return ParserUtil::parseString($stringValue);
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

        return ParserUtil::parseFloat($floatAsString);
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

        return ParserUtil::parseInt($intAsString);
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

        return ParserUtil::parseBool($boolAsString);
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

        return ParserUtil::parseDateTime($dateAsString);
    }
}