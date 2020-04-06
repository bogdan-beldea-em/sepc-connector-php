<?php

use Composer\Autoload\ClassLoader;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Annotation as JMS;
use OM\OddsMatrix\SEPC\Connector\Annotation\QueryParam;

use Doctrine\Common\Annotations\AnnotationRegistry;

/** @var ClassLoader $loader */
$loader = require_once __DIR__ . "/../vendor/autoload.php";

if (class_exists(AnnotationRegistry::class)) {
    AnnotationRegistry::registerLoader('class_exists');
}

//$loader->setUseIncludePath(true);
//$loader->register();

//require_once __DIR__ . "/autoload_annotations.php";

//\Doctrine\Common\Annotations\AnnotationRegistry::loadAnnotationClass(JMS\Type::class);
//\Doctrine\Common\Annotations\AnnotationRegistry::loadAnnotationClass(JMS\XmlAttribute::class);
//\Doctrine\Common\Annotations\AnnotationRegistry::loadAnnotationClass(JMS\XmlRoot::class);
//\Doctrine\Common\Annotations\AnnotationRegistry::loadAnnotationClass(JMS\XmlElement::class);
//\Doctrine\Common\Annotations\AnnotationRegistry::loadAnnotationClass(JMS\XmlList::class);
//\Doctrine\Common\Annotations\AnnotationRegistry::loadAnnotationClass(CamelCaseNamingStrategy::class);
//\Doctrine\Common\Annotations\AnnotationRegistry::loadAnnotationClass(RequestType::class);
//\Doctrine\Common\Annotations\AnnotationRegistry::loadAnnotationClass(QueryParam::class);
