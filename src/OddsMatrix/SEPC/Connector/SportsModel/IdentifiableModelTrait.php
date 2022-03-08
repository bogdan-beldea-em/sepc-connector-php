<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Trait IdentifiableModelTrait
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
trait IdentifiableModelTrait
{
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->_wrapped_obj['id'];
    }
}