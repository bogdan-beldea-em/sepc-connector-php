<?php


namespace OM\OddsMatrix\SEPC\Connector\Util;


use Doctrine\Common\Annotations\AnnotationRegistry;
use OM\OddsMatrix\SEPC\Connector\Annotation\QueryParam;
use OM\OddsMatrix\SEPC\Connector\Annotation\RequestType;

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
            AnnotationRegistry::loadAnnotationClass(QueryParam::class);
            AnnotationRegistry::loadAnnotationClass(RequestType::class);
        }
    }
}