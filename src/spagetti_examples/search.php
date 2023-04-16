<?php
require __DIR__ . '/vendor/autoload.php';

use Grpc\ChannelCredentials;
use Milvus\Proto\Common\DslType;
use Milvus\Proto\Common\KeyValuePair;
use Milvus\Proto\Common\MsgBase;
use Milvus\Proto\Common\PlaceholderGroup;
use Milvus\Proto\Common\PlaceholderType;
use Milvus\Proto\Common\PlaceholderValue;
use Milvus\Proto\Milvus\MilvusServiceClient;
use Milvus\Proto\Milvus\SearchRequest;
use const Grpc\STATUS_OK;


$hostname = "localhost:19530";

$client = new MilvusServiceClient($hostname, [
    'credentials' => ChannelCredentials::createInsecure(),
]);



$v = [0.5825479626655579,0.5898088812828064,0.1872732788324356];

$a_to_byte = pack("f*", ...$v);
$c = [$a_to_byte];
$request = (new SearchRequest())
    ->setCollectionName('test2')
    ->setPartitionNames([])
    ->setDsl("")
    ->setDslType(DslType::BoolExprV1)
    ->setGuaranteeTimestamp(0)
    ->setTravelTimestamp(0)
    ->setNq(1)
    ->setPlaceholderGroup(
        (new PlaceholderGroup())
            ->setPlaceholders(
                [
                    (new PlaceholderValue())
                    ->setValues($c)
                    ->setType(PlaceholderType::FloatVector)
                    ->setTag('$0'),
                ]
            )->serializeToString()
    )
    ->setSearchParams([
        (new KeyValuePair())->setKey('metric_type')->setValue('L2'),
        (new KeyValuePair())->setKey('anns_field')->setValue('vector'),
        (new KeyValuePair())->setKey('topk')->setValue('2'),
        (new KeyValuePair())->setKey('params')->setValue(json_encode(['nprobe' => 1000])),
    ]);
list($response, $status) = $client->Search($request)->wait();
$res = $response->getResults();
$ids = array();
if($res->hasIds()){
    $idsObj = $res->getIds();
    if($idsObj->hasIntId()){
        foreach ($idsObj->getIntId()->getData() as $a){
             $ids[] = $a;
        }
    }
    if($idsObj->hasStrId()){
        foreach ($idsObj->getStrId()->getData() as $a){
            $ids[] = $a;
        }
    }
}
$ids = ($res->getIds())->getIntId()->getData();
$fields = ($res->getFieldsData());
$a = ($res->getScores());
#print_r($a);
#print_r($fields);
/*foreach ($ids as $id){
    echo $id . "\n";
}*/

foreach ($a as $b){
    echo $b . "\n";
}

if ($status->code !== STATUS_OK) {
    echo "Error: " . $status->code . ", " . $status->details . PHP_EOL;
    exit(1);
}


function dd($data)
{
    print_r($data);
    exit(1);
}
