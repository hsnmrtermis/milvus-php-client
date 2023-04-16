<?php

namespace Domain;

use Domain\Schema\Field;
use Milvus\Proto\Common\DslType;
use Milvus\Proto\Common\KeyValuePair;
use Milvus\Proto\Common\PlaceholderGroup;
use Milvus\Proto\Common\PlaceholderType;
use Milvus\Proto\Common\PlaceholderValue;
use Milvus\Proto\Milvus\DeleteRequest;
use Milvus\Proto\Milvus\FlushAllRequest;
use Milvus\Proto\Milvus\InsertRequest;
use Milvus\Proto\Milvus\MilvusServiceClient;
use Milvus\Proto\Milvus\SearchRequest;
use Milvus\Proto\Milvus\ShowCollectionsRequest;
use Milvus\Proto\Schema\DataType;
use Milvus\Proto\Schema\FieldData;
use Milvus\Proto\Schema\FloatArray;
use Milvus\Proto\Schema\ScalarField;
use Milvus\Proto\Schema\VectorField;

/**
 *
 */
class Milvus
{
    /**
     * @var MilvusServiceClient
     */
    private $Client;
    /**
     * @var string
     */
    private $host = "localhost";
    /**
     * @var string
     */
    private $port = "19530";
    /**
     * @var bool
     */
    private bool $isConnected = false;

    public function __construct($host=null, $port=null)
    {
            $this->connection($host, $port);
    }
    public function getConnectionInfo(){
        return [
            'host' => $this->host,
            'port' => $this->port,
            'isConnected' => $this->isConnected
        ];
    }

    /**
     * @return void
     */
    public function connection($host=null, $port=null)
    {
        try {
            $host = $host ? $host : $this->host;
            $port = $port ? $port : $this->port;
            $this->Client = new MilvusServiceClient($host . ":" . $port, [
                'credentials' => \Grpc\ChannelCredentials::createInsecure(),
            ]);
            $this->isConnected = true;
        } catch (\Exception $e) {
            echo "Bağlantı sırasında hata meydana geldi.HATA: " . $e->getMessage();
            $this->isConnected = false;
            exit(1);
        }
    }

    /**
     * @return array
     */
    public function getCollections(): array
    {
        list($response, $status) = $this->Client
            ->ShowCollections((new ShowCollectionsRequest()))
            ->wait();
        $collectionNames = [];
        foreach ($response->getCollectionNames() as $collectionName) {
            $collectionNames[] = $collectionName;
        }
        return $collectionNames;
    }

    /**
     * @param string $collectionName (required)
     * @param string|int $id (required)
     * @param string $primaryKey (optional) (default=id)
     * @return array (deleted ids)
     */
    public function delete(string $collectionName,$id =null, string $primaryKey = "id"): array
    {
        if ($id && $collectionName) {
            if (is_string($id)){
                $expr = $primaryKey . " in  ['". $id . "']";
            }
            if (is_numeric($id)){
                $expr = $primaryKey . " in  [". $id . "]";
            }
            $request = (new DeleteRequest())
                ->setCollectionName($collectionName)
                ->setExpr($expr);
            list($response, $status) = $this->Client->Delete($request)->wait();
            return Helpers::GetIds($response->getIDs());
        }
        return [];
    }


    /**
     *
     * @param array<Field> {
     * @type string $fieldName (required)
     * @type Field $fieldData (required) ( scaler or vector data)
     * @type DataType $fieldType (required)
     * }
     * @param string $collectionName (required)
     * @return array ( inserted ids)
     */
    public function insert(array $data, string $collectionName): array
    {
        $fields = [];
        foreach ($data as $field) {
            $fieldData = (new FieldData())
                ->setFieldName($field->getFieldName())
                ->setType($field->getFieldType());
            if (gettype($field->getFieldData()) === "array") {
                if ($field->getFieldType() === DataType::FloatVector) {
                    $fieldData->setVectors(
                        (new VectorField())->setFloatVector(
                            (new FloatArray())->setData($field->getFieldData()[0])
                        )->setDim(count($field->getFieldData()[0]))
                    );
                    $fields[] = $fieldData;
                }
            } else {
                $class = Helpers::getFieldDataClass($field->getFieldType());
                if ($class) {
                    $method = $class['method'];
                    $genericObj = new $class['class'];

                    $fieldData->setScalars(
                        (new ScalarField())->{$method}(
                            (new $class['class'])->setData([$field->getFieldData()])
                        )
                    );
                    $fields[] = $fieldData;
                }

            }
        }
        $request = (new InsertRequest())->setCollectionName($collectionName)
            ->setFieldsData($fields)
            ->setNumRows(1);

        list($response, $status) = $this->Client->Insert($request)->wait();
        $this->FlushAll();
        return Helpers::GetIds($response->getIDs());
    }

    public function FlushAll()
    {
        list($response, $status) = $this->Client->FlushAll(new FlushAllRequest())->wait();
    }

    /**
     * Only FloatVector Search!
     * @param Field $data (required)
     * @param string $collectionName (required)
     * @return array
     */
    public function search(Field $data, string $collectionName, string $limit, int $nprobe): array
    {
        $ids = [];
        $scores = [];
        $results = [];
        $convertedByte = pack("f*", ...$data->getFieldData());

        $request = (new SearchRequest())
            ->setCollectionName($collectionName)
            ->setPartitionNames([])
            ->setDsl("")
            ->setDslType(DslType::BoolExprV1)
            ->setGuaranteeTimestamp(0)
            ->setTravelTimestamp(0)
            ->setNq(1)
            ->setPlaceholderGroup(
                (new PlaceholderGroup())->setPlaceholders(
                    [
                        (new PlaceholderValue())
                            ->setValues([$convertedByte])
                            ->setType(PlaceholderType::FloatVector)
                            ->setTag('$0')
                    ]
                )->serializeToString()
            )->setSearchParams([
                (new KeyValuePair())->setKey('metric_type')->setValue($data->getMetricType()),
                (new KeyValuePair())->setKey('anns_field')->setValue($data->getFieldName()),
                (new KeyValuePair())->setKey('topk')->setValue($limit),
                (new KeyValuePair())->setKey('params')->setValue(json_encode(['nprobe' => $nprobe])),
            ]);

        list($response, $status) = $this->Client->Search($request)->wait();
        $res = $response->getResults();
        if ($res->hasIds()){
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
        $scoreList = $res->getScores();
        foreach ($scoreList as $score){
            $scores[] = $score;
        }

        foreach ($scores as $index => $score){
            $results[] = [
              'id' =>  $ids[$index],
               'score' => $scores[$index]
            ];
        }
        return $results;
    }
}