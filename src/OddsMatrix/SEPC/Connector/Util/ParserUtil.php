<?php


namespace OM\OddsMatrix\SEPC\Connector\Util;


use DateTime;
use Exception;
use JMS\Serializer\Context;
use JMS\Serializer\XmlDeserializationVisitor;

class ParserUtil
{
    /**
     * @param string $valueAsString
     * @return string|null
     */
    public static function parseString(string $valueAsString): ?string
    {
        $stringValue = $valueAsString;

        if (is_null($stringValue)) {
            return null;
        }

        if ($stringValue == 'null') {
            return null;
        }

        return $stringValue;
    }

    /**
     * @param string $valueAsString
     * @return float|null
     */
    public static function parseFloat(string $valueAsString): ?float
    {
        $floatAsString = $valueAsString;

        if (is_null($floatAsString)) {
            return null;
        }

        $result = filter_var($floatAsString, FILTER_VALIDATE_FLOAT, FILTER_NULL_ON_FAILURE);
        if (!is_null($result) && gettype($result) === 'double') {
            return $result;
        } else {
            return null;
        }
    }

    /**
     * @param string $valueAsString
     * @return int|null
     */
    public static function parseInt(string $valueAsString): ?int
    {
        $intAsString = $valueAsString;

        if (is_null($intAsString)) {
            return null;
        }

        $result = filter_var($intAsString, FILTER_VALIDATE_INT, FILTER_NULL_ON_FAILURE);
        if (!is_null($result) && gettype($result) === 'integer') {
            return $result;
        } else {
            return null;
        }
    }

    /**
     * @param string $valueAsString
     * @return mixed|null
     */
    public static function parseBool(string $valueAsString)
    {
        $boolAsString = $valueAsString;

        if (is_null($boolAsString)) {
            return null;
        }

        $result = filter_var($boolAsString, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
        if (!is_null($result) && gettype($result) === 'boolean') {
            return $result;
        } else {
            return null;
        }
    }

    /**
     * @param string $valueAsString
     * @return DateTime|null
     */
    public static function parseDateTime(string $valueAsString): ?DateTime
    {
        $dateAsString = $valueAsString;

        if (null == $dateAsString) {
            return null;
        }

        try {
            $deserialized = DateTime::createFromFormat('Y-m-d H:i:s.v', $dateAsString);
            if (is_bool($deserialized)) {
                return null;
            } else {
                return $deserialized;
            }
        } catch (Exception $e) {
            return null;
        }
    }
}