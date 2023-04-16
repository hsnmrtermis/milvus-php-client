<?php

use Domain\Milvus;

require_once __DIR__ . '/../../vendor/autoload.php';

$client = new Milvus();
$deleteIds = '0196caa8-f6d3-497a-83ee-2fe41dbd52ab';
$deletedIDs = $client->delete('encodings', $deleteIds);
print_r($deletedIDs);
/**
 * Response
 *  Array
 *   (
 *   [0] => 440741353828219116
 *   )
 */