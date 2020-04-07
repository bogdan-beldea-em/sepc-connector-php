<?php


namespace OM\OddsMatrix\SEPC\Connector\Util;


use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\SerializerBuilder;
use JMS\Serializer\SerializerInterface;

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
                ->addDefaultHandlers()
                ->configureHandlers(function (\JMS\Serializer\Handler\HandlerRegistry $registry) {
                    $registry->registerSubscribingHandler(new SDQLDateSerializationHandler());
                })
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