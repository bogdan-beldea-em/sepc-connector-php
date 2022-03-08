<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;


use OM\OddsMatrix\SEPC\Connector\Util\DateTimeUtil;

/**
 * Trait UpdateTimeTrait
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
trait UpdateTimeTrait
{
    /**
     * @return \DateTime|null
     */
    public function getLastChangedTime(): ?\DateTime
    {
        return DateTimeUtil::stringToDateTime($this->_wrapped_obj['lastChangedTime']);
    }
}