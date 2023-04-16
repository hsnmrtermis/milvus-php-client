<?php

use Domain\Helpers;
use Domain\Milvus;
use Domain\Schema\Field;
use Milvus\Proto\Schema\DataType;

require_once __DIR__ . '/../../vendor/autoload.php';

$client = new Milvus();

$data = [
    (new Field())->setFieldName('col')
    ->setFieldData([[0.11240274459123611,0.7787224650382996,0.80665522813792]])
    ->setFieldType(DataType::FloatVector),

    (new Field())->setFieldName('id')
    ->setFieldData(Helpers::guidv4())
    ->setFieldType(DataType::VarChar)
];

$ids = $client->insert($data, 'deneme');
print_r($ids);
