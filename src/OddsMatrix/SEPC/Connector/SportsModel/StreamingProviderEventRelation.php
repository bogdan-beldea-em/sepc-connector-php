<?php


namespace OM\OddsMatrix\SEPC\Connector\SportsModel;

/**
 * Class StreamingProviderEventRelation
 * @package OM\OddsMatrix\SEPC\Connector\SportsModel
 */
class StreamingProviderEventRelation implements Stringable
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
     * @return StreamingProviderEventRelation
     */
    public static function wrap(array $wrapped_obj): StreamingProviderEventRelation
    {
        return new StreamingProviderEventRelation($wrapped_obj);
    }


    /**
     * @return int|null
     */
    public function getStreamingProviderId(): ?int
    {
        return $this->_wrapped_obj['streamingProviderId'];
    }


    /**
     * @return int|null
     */
    public function getEventId(): ?int
    {
        return $this->_wrapped_obj['eventId'];
    }


    /**
     * @return string|null
     */
    public function getChannel(): ?string
    {
        return $this->_wrapped_obj['channel'];
    }


    /**
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->_wrapped_obj['language'];
    }


    /**
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->_wrapped_obj['note'];
    }


    /**
     * @return string
     */
    public function __toString(): string
    {
        return json_encode($this->_wrapped_obj);
    }
}
