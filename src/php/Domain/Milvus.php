<?php

namespace Hasanmertermis\MilvusPhpClient\Domain;

use Hasanmertermis\MilvusPhpClient\Domain\Schema\Field;
use Milvus\Proto\Common\DslType;
use Milvus\Proto\Common\KeyValuePair;
use Milvus\Proto\Common\PlaceholderGroup;
use Milvus\Proto\Common\PlaceholderType;
use Milvus\Proto\Common\PlaceholderValue;
use Milvus\Proto\Milvus\CreateCollectionRequest;
use Milvus\Proto\Milvus\DeleteRequest;
use Milvus\Proto\Milvus\FlushAllRequest;
use Milvus\Proto\Milvus\InsertRequest;
use Milvus\Proto\Milvus\MilvusServiceClient;
use Milvus\Proto\Milvus\SearchRequest;
use Milvus\Proto\Milvus\ShowCollectionsRequest;
use Milvus\Proto\Schema\CollectionSchema;
use Milvus\Proto\Schema\DataType;
use Milvus\Proto\Schema\FieldData;
use Milvus\Proto\Schema\FieldSchema;
use Milvus\Proto\Schema\FloatArray;
use Milvus\Proto\Schema\ScalarField;
use Milvus\Proto\Schema\VectorField;
use const Grpc\STATUS_OK;

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
    private $host;
    /**
     * @var string
     */
    private $port;
    /**
     * @var bool
     */
    private bool $isConnected = false;

    public function __construct()
    {
    }

    public function getConnectionInfo()
    {
        return [
            'host' => $this->host,
            'port' => $this->port,
            'isConnected' => $this->isConnected
        ];
    }

    /**
     * @return void
     */
    public function connection($host = null, $port = null)
    {
        $this->host = $host;
        $this->port = $port;
        $this->Client = new MilvusServiceClient($host . ":" . $port, [
            'credentials' => \Grpc\ChannelCredentials::createInsecure(),
        ]);
        $this->isConnected = true;
    }

    /**
     * @param string $name
     * @param string $description
     * @param array|Field[] $fields
     * @param int $shardsNum
     * @param int $consistencyLevel
     * @return void
     * @throws \Exception
     */
    public function createCollection(string $name, string $description, array $fields, int $shardsNum = 0, int $consistencyLevel = 0)
    {
        $this->connectionControl();

        $fieldSchemas = [];
        foreach ($fields as $field) {
            /** @var Field $field */
            $fieldSchema = (new FieldSchema())
                ->setName($field->getFieldName())
                ->setIsPrimaryKey($field->isPrimaryField())
                ->setDataType($field->getFieldType());

            $typeParams = [];

            if (!is_null($field->getDim())) {
                $typeParams[] = (new KeyValuePair())
                    ->setKey('dim')
                    ->setValue(strval($field->getDim()));
            }

            if (!is_null($field->getMaxLength())) {
                $typeParams[] = (new KeyValuePair())
                    ->setKey('max_length')
                    ->setValue(strval($field->getMaxLength()));
            }

            if (!empty($typeParams)) {
                $fieldSchema->setTypeParams($typeParams);
            }

            $fieldSchemas[] = $fieldSchema;
        }

        $collectionSchema = (new CollectionSchema())
            ->setName($name)
            ->setDescription($description)
            ->setFields($fieldSchemas);

        $request = (new CreateCollectionRequest())
            ->setCollectionName($name)
            ->setSchema($collectionSchema->serializeToString())
            ->setShardsNum($shardsNum)
            ->setConsistencyLevel($consistencyLevel);

        list($response, $status) = $this->Client->CreateCollection($request)->wait();
        $this->controlResults($response, $status);
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function getCollections(): array
    {
        $this->connectionControl();
        list($response, $status) = $this->Client
            ->ShowCollections((new ShowCollectionsRequest()))
            ->wait();
        $this->controlResults($response, $status, 'getCollectionNames');
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
     * @throws \Exception
     */
    public function delete(string $collectionName, $id = null, string $primaryKey = "id"): array
    {
        $this->connectionControl();
        if ($id && $collectionName) {
            if (is_string($id)) {
                $expr = $primaryKey . " in  ['" . $id . "']";
            }
            if (is_numeric($id)) {
                $expr = $primaryKey . " in  [" . $id . "]";
            }
            $request = (new DeleteRequest())
                ->setCollectionName($collectionName)
                ->setExpr($expr);
            list($response, $status) = $this->Client->Delete($request)->wait();
            $this->controlResults($response, $status, 'getIDs');
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
     * @throws \Exception
     */
    public function insert(array $data, string $collectionName): array
    {
        $this->connectionControl();
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
        $this->controlResults($response, $status, 'getIDs');
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
     * @throws \Exception
     */
    public function search(Field $data, string $collectionName, string $limit, int $nprobe): array
    {
        $this->connectionControl();
        $results = [];
        $convertedByte = pack("f*", ...$data->getFieldData());

        $request = (new SearchRequest())
            ->setCollectionName($collectionName)
            ->setPartitionNames([])
            ->setDsl("")
            ->setDslType(DslType::BoolExprV1)
            ->setGuaranteeTimestamp(1)
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
        $this->controlResults($response, $status, 'getResults');
        $res = $response->getResults();
        if ($res->hasIds()) {
            $idsObj = $res->getIds();
            $scoreList = $res->getScores();
            if ($idsObj->hasIntId()) {
                foreach ($idsObj->getIntId()->getData() as $index => $id) {
                    $results[] = [
                        'id' => $id,
                        'distance' => number_format($scoreList[$index], 6)
                    ];
                }
            }
            if ($idsObj->hasStrId()) {
                foreach ($idsObj->getStrId()->getData() as $index => $id) {
                    $results[] = [
                        'id' => $id,
                        'distance' => number_format($scoreList[$index], 6)
                    ];
                }
            }
        }
        return $results;
    }

    private function connectionControl()
    {
        if (!$this->isConnected) {
            throw new \Exception('Please connect to milvus with the connection method.');
        }
    }

    private function controlResults($response, $status, $method = null)
    {
        if ($status->code !== STATUS_OK) {
            throw new \Exception('Milvus Connection (Status) Error: Code: ' . $status->code . ' Details: ' . $status->details . PHP_EOL);
        }
        if (is_null($response)) {
            throw new \Exception('Milvus Parameters (Response) Error: Could not resolve error, please read contents of UnaryCall.php => wait() => $event->message.');
        }
        if (!is_null($method) && is_null($response->$method())) {
            throw new \Exception('Milvus Parameters (Result) Error: Could not resolve error, please read contents of UnaryCall.php => wait() => $event->message.');
        }
    }
}