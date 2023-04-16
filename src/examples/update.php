<?php

use Domain\Helpers;
use Domain\Milvus;
use Domain\Schema\Field;
use Milvus\Proto\Schema\DataType;

require_once __DIR__ . '/../../vendor/autoload.php';

$client = new Milvus();

$id = '41822b49-2272-46cd-8d49-a959faf819d8';

$client->delete('example_collection', $id, 'id');

$newData = [
    (new Field())->setFieldName('col')
        ->setFieldData([[0.44440274459123611,0.7787224650382996,0.80665522813792]])
        ->setFieldType(DataType::FloatVector),

    (new Field())->setFieldName('id')
        ->setFieldData($id)
        ->setFieldType(DataType::VarChar)
];

$client->insert($newData, 'example_collection');
