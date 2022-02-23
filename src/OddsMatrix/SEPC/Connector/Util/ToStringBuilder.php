<?php

namespace OM\OddsMatrix\SEPC\Connector\Util;

class ToStringBuilder
{
    private $className;
    private $properties = array();

    public function __construct(string $className)
    {
        $this->className = $className;
    }

    /**
     * @param string $name
     * @param string|null $value
     * @return ToStringBuilder
     */
    public function addProperty(string $name, ?string $value): ToStringBuilder
    {
        if (!is_null($value)) {
            $this->properties[$name] = $value;
        }

        return $this;
    }

    public function __toString()
    {
        $items = [];
        foreach ($this->properties as $key => $value) {
            $items[] = "$key=$value";
        }
        return $this->className . "{" . implode(" ", $items) ."}";
    }
}