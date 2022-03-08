<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Trait VersionedTrait
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
trait VersionedTrait
{
    /**
     * @return int|null
     */
    public function getVersion(): ?int
    {
        return $this->_wrapped_obj['version'];
    }
}