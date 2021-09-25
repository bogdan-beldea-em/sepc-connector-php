<?php

namespace OM\OddsMatrix\SEPC\Connector\Util;

use JMS\Serializer\Visitor\DeserializationVisitorInterface;
use JMS\Serializer\Visitor\Factory\DeserializationVisitorFactory;

class CustomDeserializationVisitorFactory implements DeserializationVisitorFactory
{
    public function getVisitor(): DeserializationVisitorInterface
    {
        return new CustomDeserializationVisitor();
    }

}