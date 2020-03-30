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


    public static function getSerializer(): SerializerInterface
    {
        if (null == self::$_serializer) {
            self::$_serializer = SerializerBuilder::create()
                ->setPropertyNamingStrategy(new CamelCaseNamingStrategy())
                ->addDefaultHandlers()
                ->configureHandlers(function (\JMS\Serializer\Handler\HandlerRegistry $registry) {
                    $registry->registerSubscribingHandler(new SDQLDateSerializationHandler());
                })
                ->build();;
        }

        return self::$_serializer;
    }
}