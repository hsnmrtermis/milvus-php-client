<?php
require __DIR__ . '/vendor/autoload.php';

use Grpc\ChannelCredentials;
use Milvus\Proto\Milvus\InsertRequest;
use Milvus\Proto\Milvus\MilvusServiceClient;
use Milvus\Proto\Schema\DataType;
use Milvus\Proto\Schema\FieldData;
use Milvus\Proto\Schema\FloatArray;
use Milvus\Proto\Schema\VectorField;
use const Grpc\STATUS_OK;



$hostname = "localhost:19530";

$client = new MilvusServiceClient($hostname, [
    'credentials' => ChannelCredentials::createInsecure(),
]);



$data = [0.7756362557411192,0.7210977673530572,0.12801973521709442];
$fieldData = (new FieldData())->setFieldName('vector')
            ->setType(DataType::FloatVector)
            ->setVectors(
                (new VectorField())->setFloatVector(
                    (new FloatArray())->setData($data)
                )->setDim(3)
            );
$fieldData2 = (new FieldData())->setFieldName('id')
            ->setType(DataType::VarChar)
            ->setScalars(
                (new \Milvus\Proto\Schema\ScalarField())->setStringData(
                    (new \Milvus\Proto\Schema\StringArray())->setData([guidv4()])
                )
            );


$a = array();
$a[] = $fieldData;
$a[] = $fieldData2;

$request = (new InsertRequest())->setCollectionName('test2')
            ->setFieldsData($a)
            ->setNumRows(1)
            ->setPartitionName('new_partition');


list($response, $status) = $client->Insert($request)->wait();

$a = $client->FlushAll(new \Milvus\Proto\Milvus\FlushAllRequest())->wait();

dd($response->getInsertCnt());
if ($status->code !== STATUS_OK){
    echo "Error: ". $status->code . ", " . $status->details . PHP_EOL;
    exit(1);
}


function dd($data){
    print_r($data);
    exit(1);
}
function guidv4($data = null) {
    // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
    $data = $data ?? random_bytes(16);
    assert(strlen($data) == 16);

    // Set version to 0100
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
    // Set bits 6-7 to 10
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

    // Output the 36 character UUID.
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}