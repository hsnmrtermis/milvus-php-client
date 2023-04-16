<?php

use Domain\Milvus;
use Domain\Schema\Field;

require_once __DIR__ . '/../../vendor/autoload.php';

$client = new Milvus();

$data = (new Field())
    ->setFieldData([0.11240274459123611,0.7787224650382996,0.80665522813792])
    ->setMetricType('L2')
    ->setFieldName('encoding');

$response = $client->search($data, 'encodings', 10, 1000);
print_r($response);