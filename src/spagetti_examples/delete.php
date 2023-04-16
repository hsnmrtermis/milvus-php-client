<?php
require __DIR__ . '/vendor/autoload.php';

use Grpc\ChannelCredentials;
use Milvus\Proto\Milvus\MilvusServiceClient;
use const Grpc\STATUS_OK;


$hostname = "localhost:19530";

$client = new MilvusServiceClient($hostname, [
    'credentials' => ChannelCredentials::createInsecure(),
]);


$request = new \Milvus\Proto\Milvus\DeleteRequest();
$request->setCollectionName('encodings');
$request->setExpr("id in [04cc396d-c714-4c70-a5ec-4897b190eee1']");

list($response, $status) = $client->Delete($request)->wait();




if ($status->code !== STATUS_OK) {
    print_r($status);
    echo "Error: " . $status->code . ", " . $status->details . PHP_EOL;
    exit(1);
}
function dd($data)
{
    print_r($data);
    exit(1);
}