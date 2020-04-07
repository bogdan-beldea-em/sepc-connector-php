<?php


namespace OM\OddsMatrix\SEPC\Connector\Util;


class SEPCAnnotationLoader
{
    /**
     * @var bool
     */
    private static $_loaded = false;

    /**
     *
     */
    public static function load(): void
    {
        if (!self::$_loaded) {
            require_once __DIR__ . "/../Annotation/QueryParam.php";
            require_once __DIR__ . "/../Annotation/RequestType.php";
        }
    }
}