<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Trait NamedTrait
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
trait NamedTrait
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->_wrapped_obj['name'];
    }
}