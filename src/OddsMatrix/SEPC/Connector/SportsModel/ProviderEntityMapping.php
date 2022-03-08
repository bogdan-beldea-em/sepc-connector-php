<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class ProviderEntityMapping
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class ProviderEntityMapping implements Stringable
{
    use TypedTrait, IdentifiableModelTrait, VersionedTrait;

    protected $_wrapped_obj;
    
    /**
     * @param array $wrapped_obj
     */
    private function __construct(array $wrapped_obj)
    {
        $this->_wrapped_obj = $wrapped_obj;
    }

    /**
     * @param array $wrapped_obj
     * @return ProviderEntityMapping
     */
    public static function wrap(array $wrapped_obj): ProviderEntityMapping
    {
        return new ProviderEntityMapping($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getProviderId(): ?int
    {
        return $this->_wrapped_obj['providerId'];
    }


    /**
     * @return string|null
     */
    public function getProviderEntityTypeId(): ?string
    {
        return $this->_wrapped_obj['providerEntityTypeId'];
    }


    /**
     * @return string|null
     */
    public function getProviderEntityId(): ?string
    {
        return $this->_wrapped_obj['providerEntityId'];
    }


    /**
     * @return int|null
     */
    public function getEntityTypeId(): ?int
    {
        return $this->_wrapped_obj['entityTypeId'];
    }


    /**
     * @return int|null
     */
    public function getEntityId(): ?int
    {
        return $this->_wrapped_obj['entityId'];
    }


    /**
     * @return string|null
     */
    public function getProviderEntityName(): ?string
    {
        return $this->_wrapped_obj['providerEntityName'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
