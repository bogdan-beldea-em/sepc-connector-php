<?php

namespace OM\OddsMatrix\SEPC\Connector\Annotation;

use Doctrine\Common\Annotations\Annotation as Doctrine;

/**
 * Class RequestType
 *
 * @Annotation
 * @Doctrine\Target("CLASS")
 */
class RequestType {

    /**
     * @Doctrine\Required()
     * @var string
     */
    public $name;
}