<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Trait DescribedTrait
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
trait DescribedTrait
{
    /**
     * @return string
     */
    public function getDescription(): ?string
    {
        return $this->_wrapped_obj['description'];
    }
}