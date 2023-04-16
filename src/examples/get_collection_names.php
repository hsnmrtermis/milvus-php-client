<?php
use Domain\Milvus;
require_once __DIR__ . '/../../vendor/autoload.php';

$milvusClient = new Milvus();

$collectionNames = $milvusClient->getCollections();

print_r($collectionNames);
/**
 * Response
    Array
        (
        [0] => test
        [1] => test2
        [2] => test3
        )
 */