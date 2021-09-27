<?php

require_once __DIR__ . "/../src/autoload_manual.php";


$serializer = \OM\OddsMatrix\SEPC\Connector\Util\SDQLSerializerProvider::getSerializer();

$fileContents = [
    [
        \OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantType::class,
        '<ParticipantType isIndividual="false" hasName="false" hasFirstName="false" hasLastName="null" hasShortName="false" hasIsMale="false" hasBirthTime="false" hasCountry="true" hasRetirementTime="false"/>',
        [
            function (\OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantType $participantType) { return assert($participantType->isIndividual() === false); },
            function (\OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantType $participantType) { return assert($participantType->isHasName() === false); },
            function (\OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantType $participantType) { return assert($participantType->isHasFirstName() === false); },
            function (\OM\OddsMatrix\SEPC\Connector\SportsModel\ParticipantType $participantType) { return assert($participantType->isHasLastName() === null); },
        ]
    ],
    [
        \OM\OddsMatrix\SEPC\Connector\SportsModel\Market::class,
        '<Market eventId="123" isComplete="true" paramFloat1="331.14" paramFloat2="null" />',
        [
            function (\OM\OddsMatrix\SEPC\Connector\SportsModel\Market $market) { return assert($market->getEventId() === 123); },
            function (\OM\OddsMatrix\SEPC\Connector\SportsModel\Market $market) { return assert($market->isComplete() === true); },
            function (\OM\OddsMatrix\SEPC\Connector\SportsModel\Market $market) { return assert($market->getParamFloat1() === 331.14); },
            function (\OM\OddsMatrix\SEPC\Connector\SportsModel\Market $market) { return assert($market->getParamFloat2() === null); },
        ]
    ],
    [
        \OM\OddsMatrix\SEPC\Connector\SportsModel\Market::class,
        '<Market eventId="null" isComplete="null" paramFloat1="null" paramFloat2="113.12" />',
        [
            function (\OM\OddsMatrix\SEPC\Connector\SportsModel\Market $market) { return assert($market->getEventId() === null); },
            function (\OM\OddsMatrix\SEPC\Connector\SportsModel\Market $market) { return assert($market->isComplete() === null); },
            function (\OM\OddsMatrix\SEPC\Connector\SportsModel\Market $market) { return assert($market->getParamFloat1() === null); },
            function (\OM\OddsMatrix\SEPC\Connector\SportsModel\Market $market) { return assert($market->getParamFloat2() === 113.12); },
        ]
    ],
    [
        \OM\OddsMatrix\SEPC\Connector\SportsModel\Source::class,
        '<Source />',
        [
            function (\OM\OddsMatrix\SEPC\Connector\SportsModel\Source $source) { return assert($source->getLastCollectedTime() === null); },
        ]
    ],
    [
        \OM\OddsMatrix\SEPC\Connector\SportsModel\Source::class,
        '<Source lastCollectedTime="1990-02-01 00:00:00.000" />',
        [
            function (\OM\OddsMatrix\SEPC\Connector\SportsModel\Source $source) { return assert($source->getLastCollectedTime()->getTimestamp() !== null); },
        ]
    ]
];

for ($i = 0; $i < count($fileContents); $i++) {

    $dataType = $fileContents[$i][0];
    /** @var string $rawData */
    $rawData = $fileContents[$i][1];
    $tests = $fileContents[$i][2];

    $data = $serializer->deserialize($rawData, $dataType, 'xml');

    echo "Testing $dataType\n";
    foreach ($tests as $test) {
        $result = $test($data);
        $resultStr = $result ? "PASS" : "FAIL";
        echo "Test $resultStr\n";
    }

    echo "\n";
}

