<?php

use Grpc\ChannelCredentials;
use Milvus\Proto\Milvus\MilvusServiceClient;
use Milvus\Proto\Milvus\ShowCollectionsRequest;
use const Grpc\STATUS_OK;

require_once __DIR__ . '/vendor/autoload.php';



$hostname = "localhost:19530";

$client = new MilvusServiceClient($hostname, [
    'credentials' => ChannelCredentials::createInsecure(),
]);


$request = new ShowCollectionsRequest();
list($response, $status) = $client->ShowCollections($request)->wait();
if ($status->code !== STATUS_OK){
    echo "Error: ". $status->code . ", " . $status->details . PHP_EOL;
    exit(1);
}
$a = $response->getCollectionNames();

foreach ($a as $b){
    print_r($b);
}
print_r($a)


?>



