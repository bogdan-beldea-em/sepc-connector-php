<?php


namespace OM\OddsMatrix\SEPC\Connector\Util;


use DateTime;
use Exception;
use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\XmlDeserializationVisitor;
use SimpleXMLElement;

class SDQLDateSerializationHandler implements SubscribingHandlerInterface
{
    public static function getSubscribingMethods()
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => 'DateTime',
                'method' => 'deserializeDateTime',
            ]
        ];
    }

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