<?php

use OM\OddsMatrix\SEPC\Connector\SDQL\Response\SDQLResponse;
use OM\OddsMatrix\SEPC\Connector\SEPCCredentials;
use OM\OddsMatrix\SEPC\Connector\SEPCPushConnector;
use OM\OddsMatrix\SEPC\Connector\SportsModel\UpdateData;

require_once __DIR__ . "/../src/autoload_manual.php";

$subscriptionSpecificationName = EnvVarProvider::getSubscriptionSpecificationName();
$pushEndpoint = EnvVarProvider::getPushEndpoint();
$pushPort = EnvVarProvider::getPushPort();
$logger = new StdoutLogger();
$logger = new StdoutLogger();
$state = new PersistableConnectionState();
$logger->info("Pre-run connector");
$credentials = new SEPCCredentials($subscriptionSpecificationName);
$logger->info("Credentials instantiated");
$connector = new SEPCPushConnector($credentials, $logger, $state);
$logger->info("Connector instantiated");
$connection = $connector->autoconnect($pushEndpoint, $pushPort);
$logger->info("Connected");
for ($i = 0; $i < 250000; $i++) {
    /** @var SDQLResponse|null $data */
    $data = $connection->getNextData();
    if (is_null($data)) {
        $i--;
        continue;
    }

    $initialData = $data->getInitialData();
    if (!is_null($initialData)) {
        $batchId = $initialData->getBatchId();
        $now = time();
        $entitiesContainer = $initialData->getEntities();
        $entityInfo = "";
        if (!is_null($entitiesContainer)) {
            $entities = $entitiesContainer->getAll();
//            foreach ($entities as $entity) {
//                $entityInfo .= "\t$entity\n";
//            }
        }
        $logger->info("Initial data batch $batchId received at $now \n" . $entityInfo);
    }

    /** @var UpdateData[]|null $updateData */
    $updateData = $data->getDataUpdates();
    if (!is_null($updateData)) {
        foreach ($updateData as $updateDatum) {
            $batchId = $updateDatum->getBatchId();
            $createdTime  = $updateDatum->getCreatedTime()->getTimestamp();
            $now = time();
            $entityInfo = "";

            $entities = $updateDatum->getAll();
//            foreach ($entities as $entity) {
//                $entityInfo .= "\t$entity\n";
//            }
            $logger->info("Batch $batchId created at $createdTime received at $now \n" . $entityInfo);
        }
    }
}
$logger->info("DONE");