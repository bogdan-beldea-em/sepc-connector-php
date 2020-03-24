<?php

namespace OM\OddsMatrix\SEPC\Connector\Util;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use OM\OddsMatrix\SEPC\Connector\Annotation\QueryParam;
use RequestType;

/**
 * Class QueryParamSerializer
 * @package OM\OddsMatrix\SEPC\Connector\Util
 *
 * Handles top level serialization for translating request entities to the HTTP format.
 */
class QueryParamSerializer
{
    public function serialize($object)
    {
        $reader = new AnnotationReader();
        $reflectionClass = new \ReflectionClass($object);

        /** @var RequestType $requestType */
        $requestType = $reader->getClassAnnotation($reflectionClass, RequestType::class);

        $serializedData = '?requestType=' . $requestType->name;

        foreach ($reflectionClass->getProperties() as $property) {
            /** @var QueryParam $queryParamName */
            $queryParamName = $reader->getPropertyAnnotation($property, QueryParam::class);
            $property->setAccessible(true);
            $queryParamValue = $property->getValue($object);
            $serializedData .= '&' . $queryParamName->name . '=' . $queryParamValue;
        }

        return $serializedData;
    }
}