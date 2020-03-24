<?php

namespace OM\OddsMatrix\SEPC\Connector\Annotation;

use Doctrine\Common\Annotations\Annotation as Doctrine;

/**
 * Class QueryParamName
 * @package OM\OddsMatrix\SEPC\Connector\Annotation
 *
 * @Annotation
 * @Doctrine\Target("FIELD")
 */
class QueryParam
{
    /**
     * @Doctrine\Required()
     * @var string
     */
    public $name;
}