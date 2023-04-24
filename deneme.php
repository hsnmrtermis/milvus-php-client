<?php
require_once __DIR__ . '/vendor/autoload.php';


use Domain\Helpers;
use Domain\Schema\Field;
use Milvus\Proto\Schema\DataType;


$client = new \Domain\Milvus();
$client->connection('localhost', 19530);

//$collectionNames = $client->getCollections();
//
//print_r($collectionNames);


//$deleteIds = '7bfe4e77-26c2-4b47-9d6e-476d46dacdc4';
//$deletedIDs = $client->delete('example_collection', $deleteIds);
//print_r($deletedIDs);

//$data = [
//    (new Field())->setFieldName('vector')
//        ->setFieldData([[0.11240274459123611, 0.7787224650382996, 0.80665522813792]])
//        ->setFieldType(DataType::FloatVector),
//
//    (new Field())->setFieldName('id')
//        ->setIsPrimaryField(true)
//        ->setFieldData(Helpers::guidv4())
//        ->setFieldType(DataType::VarChar),
//
//];
//
//$ids = $client->insert($data, 'deneme');
//print_r($ids);


//$data = (new Field())
//    ->setFieldData([0.11240274459123611,0.7787224650382996,0.80665522813792])
//    ->setMetricType('L2')
//    ->setFieldName('vector');
//
//$response = $client->search($data, 'deneme', 10, 1000);
//print_r($response);
