<?php

use Composer\Autoload\ClassLoader;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Annotation as JMS;
use OM\OddsMatrix\SEPC\Connector\Annotation\QueryParam;

/** @var ClassLoader $loader */
$loader = require __DIR__ . "/../vendor/autoload.php";
$loader->setUseIncludePath(true);
$loader->register();

require_once __DIR__ . "/../vendor/jms/serializer/src/Annotation/Type.php";
require_once __DIR__ . "/../vendor/jms/serializer/src/Annotation/SerializedName.php";
require_once __DIR__ . "/../vendor/jms/serializer/src/Annotation/XmlAttribute.php";
require_once __DIR__ . "/../vendor/jms/serializer/src/Annotation/XmlRoot.php";
require_once __DIR__ . "/../src/OddsMatrix/SEPC/Connector/Annotation/RequestType.php";
require_once __DIR__ . "/../src/OddsMatrix/SEPC/Connector/Annotation/QueryParam.php";
\Doctrine\Common\Annotations\AnnotationRegistry::loadAnnotationClass(JMS\Type::class);
\Doctrine\Common\Annotations\AnnotationRegistry::loadAnnotationClass(JMS\XmlAttribute::class);
\Doctrine\Common\Annotations\AnnotationRegistry::loadAnnotationClass(JMS\XmlRoot::class);
\Doctrine\Common\Annotations\AnnotationRegistry::loadAnnotationClass(CamelCaseNamingStrategy::class);
\Doctrine\Common\Annotations\AnnotationRegistry::loadAnnotationClass(RequestType::class);
\Doctrine\Common\Annotations\AnnotationRegistry::loadAnnotationClass(QueryParam::class);
