<?php

use Composer\Autoload\ClassLoader;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Annotation as JMS;
use OM\OddsMatrix\SEPC\Connector\Annotation\QueryParam;

use Doctrine\Common\Annotations\AnnotationRegistry;

/** @var ClassLoader $loader */
$loader = require_once __DIR__ . "/../vendor/autoload.php";
$loader->setUseIncludePath(true);
$loader->register();
