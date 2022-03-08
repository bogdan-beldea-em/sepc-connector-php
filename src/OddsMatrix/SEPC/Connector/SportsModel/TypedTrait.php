<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;


/**
 * Trait TypedTrait
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
trait TypedTrait
{
    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->_wrapped_obj['type'];
    }
}