<?php


namespace OM\OddsMatrix\SEPC\Connector\Util;


use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\HandlerRegistry;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;
use JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory;

class SDQLSerializerProvider
{
    /**
     * @var SerializerInterface
     */
    private static $_serializer = null;

    /**
     * @return SerializerInterface
     * @throws \ReflectionException
     */
    public static function getSerializer(): SerializerInterface
    {
        if (null == self::$_serializer) {
            self::$_serializer = SerializerBuilder::create()
                ->setPropertyNamingStrategy(new CamelCaseNamingStrategy())
                ->configureHandlers(function (HandlerRegistry $registry) {
                    $registry->registerHandler(GraphNavigator::DIRECTION_DESERIALIZATION, "DateTime", "xml", function (CustomDeserializationVisitor $visitor, $data) {

                        if (null === $data) {
                            return null;
                        }

                        $data = (string) $data;

                        $year = substr($data, 0, 4);
                        $month = substr($data, 5, 2);
                        $day = substr($data, 8, 2);
                        $hour = substr($data, 11, 2);
                        $minute = substr($data, 14, 2);
                        $second = substr($data, 17, 2);
                        $millis = substr($data, 20, 3);

                        $dateTime = new \DateTime();
                        $dateTime->setDate($year, $month, $day);
                        $dateTime->setTime($hour, $minute, $second, 1000 * $millis);

                        return $dateTime;
                    });
                })
                ->setDeserializationVisitor('xml', new CustomDeserializationVisitorFactory())
                ->setSerializationVisitor('xml', new XmlSerializationVisitorFactory())
                ->build();

            self::buildSerializationContext(self::$_serializer);
        }

        return self::$_serializer;
    }

    /**
     * @param SerializerInterface $serializer
     * @throws \ReflectionException
     */
    private static function buildSerializationContext(SerializerInterface $serializer): void {
        $reflectionClass = new \ReflectionClass($serializer);
        $fileName = $reflectionClass->getFileName();
        $directory = dirname($fileName);

        require_once $directory . "/Annotation/XmlRoot.php";
        require_once $directory . "/Annotation/Type.php";
        require_once $directory . "/Annotation/SerializedName.php";
        require_once $directory . "/Annotation/XmlElement.php";
        require_once $directory . "/Annotation/XmlAttribute.php";
        require_once $directory . "/Annotation/XmlList.php";
    }
}