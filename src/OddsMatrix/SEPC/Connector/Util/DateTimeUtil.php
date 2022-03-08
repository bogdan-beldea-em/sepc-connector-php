<?php

namespace OM\OddsMatrix\SEPC\Connector\Util;

class DateTimeUtil
{
    private static $DATE_TIME_FORMAT = 'Y-m-d H:i:s.v';

    public static function stringToDateTime(?string $str): ?\DateTime
    {
        if (is_null($str)) {
            return null;
        }

        return \DateTime::createFromFormat(self::$DATE_TIME_FORMAT, $str);
    }
}