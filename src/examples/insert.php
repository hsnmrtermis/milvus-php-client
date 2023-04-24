<?php

use Domain\Helpers;
use Domain\Milvus;
use Domain\Schema\Field;
use Milvus\Proto\Schema\DataType;

require_once __DIR__ . '/../../vendor/autoload.php';


$client = new Milvus();
$client->connection('localhost', 19530);
$data = [
    (new Field())->setFieldName('encoding')
        ->setFieldData([[0.11240274459123611, 0.7787224650382996, 0.80665522813792]])
        ->setFieldType(DataType::FloatVector),

    (new Field())->setFieldName('id')
        ->setIsPrimaryField(true)
        ->setFieldData(33331)
        ->setFieldType(DataType::Int64),

    (new Field())->setFieldName('a')
        ->setFieldData(12312)
        ->setFieldType(DataType::Int64)
];

$ids = $client->insert($data, 'deneme2');
print_r($ids);
