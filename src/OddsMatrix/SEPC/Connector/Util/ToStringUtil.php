<?php

namespace OM\OddsMatrix\SEPC\Connector\Util;

class ToStringUtil
{
    public static function transformDate(?\DateTime $dateTime): ?int
    {
        if (is_null($dateTime)) {
            return null;
        }

        return $dateTime->getTimestamp();
    }
}