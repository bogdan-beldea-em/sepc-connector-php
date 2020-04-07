<?php


namespace OM\OddsMatrix\SEPC\Connector\Util;


class JMSAnnotationLoader
{
    /**
     * @var bool
     */
    private $_loaded = false;

    /**
     * @param string $vendorPath
     */
    public static function load(string $vendorPath): void
    {
        require_once $vendorPath . "/jms/serializer/src/Annotation/SerializedName.php";
        require_once $vendorPath . "/jms/serializer/src/Annotation/XmlAttribute.php";
        require_once $vendorPath . "/jms/serializer/src/Annotation/XmlRoot.php";
        require_once $vendorPath . "/jms/serializer/src/Annotation/XmlList.php";
        require_once $vendorPath . "/jms/serializer/src/Annotation/XmlElement.php";
    }
}