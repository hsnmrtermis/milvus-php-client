<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Milvus\Proto\Milvus;

/**
 */
class MilvusServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Milvus\Proto\Milvus\CreateCollectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateCollection(\Milvus\Proto\Milvus\CreateCollectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/CreateCollection',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\DropCollectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DropCollection(\Milvus\Proto\Milvus\DropCollectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/DropCollection',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\HasCollectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function HasCollection(\Milvus\Proto\Milvus\HasCollectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/HasCollection',
        $argument,
        ['\Milvus\Proto\Milvus\BoolResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\LoadCollectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LoadCollection(\Milvus\Proto\Milvus\LoadCollectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/LoadCollection',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\ReleaseCollectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReleaseCollection(\Milvus\Proto\Milvus\ReleaseCollectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/ReleaseCollection',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\DescribeCollectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DescribeCollection(\Milvus\Proto\Milvus\DescribeCollectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/DescribeCollection',
        $argument,
        ['\Milvus\Proto\Milvus\DescribeCollectionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\GetCollectionStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCollectionStatistics(\Milvus\Proto\Milvus\GetCollectionStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetCollectionStatistics',
        $argument,
        ['\Milvus\Proto\Milvus\GetCollectionStatisticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\ShowCollectionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ShowCollections(\Milvus\Proto\Milvus\ShowCollectionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/ShowCollections',
        $argument,
        ['\Milvus\Proto\Milvus\ShowCollectionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\AlterCollectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AlterCollection(\Milvus\Proto\Milvus\AlterCollectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/AlterCollection',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\CreatePartitionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreatePartition(\Milvus\Proto\Milvus\CreatePartitionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/CreatePartition',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\DropPartitionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DropPartition(\Milvus\Proto\Milvus\DropPartitionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/DropPartition',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\HasPartitionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function HasPartition(\Milvus\Proto\Milvus\HasPartitionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/HasPartition',
        $argument,
        ['\Milvus\Proto\Milvus\BoolResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\LoadPartitionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LoadPartitions(\Milvus\Proto\Milvus\LoadPartitionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/LoadPartitions',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\ReleasePartitionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReleasePartitions(\Milvus\Proto\Milvus\ReleasePartitionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/ReleasePartitions',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\GetPartitionStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPartitionStatistics(\Milvus\Proto\Milvus\GetPartitionStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetPartitionStatistics',
        $argument,
        ['\Milvus\Proto\Milvus\GetPartitionStatisticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\ShowPartitionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ShowPartitions(\Milvus\Proto\Milvus\ShowPartitionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/ShowPartitions',
        $argument,
        ['\Milvus\Proto\Milvus\ShowPartitionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\GetLoadingProgressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLoadingProgress(\Milvus\Proto\Milvus\GetLoadingProgressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetLoadingProgress',
        $argument,
        ['\Milvus\Proto\Milvus\GetLoadingProgressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\GetLoadStateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetLoadState(\Milvus\Proto\Milvus\GetLoadStateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetLoadState',
        $argument,
        ['\Milvus\Proto\Milvus\GetLoadStateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\CreateAliasRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateAlias(\Milvus\Proto\Milvus\CreateAliasRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/CreateAlias',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\DropAliasRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DropAlias(\Milvus\Proto\Milvus\DropAliasRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/DropAlias',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\AlterAliasRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AlterAlias(\Milvus\Proto\Milvus\AlterAliasRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/AlterAlias',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\DescribeAliasRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DescribeAlias(\Milvus\Proto\Milvus\DescribeAliasRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/DescribeAlias',
        $argument,
        ['\Milvus\Proto\Milvus\DescribeAliasResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\ListAliasesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListAliases(\Milvus\Proto\Milvus\ListAliasesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/ListAliases',
        $argument,
        ['\Milvus\Proto\Milvus\ListAliasesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\CreateIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateIndex(\Milvus\Proto\Milvus\CreateIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/CreateIndex',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\DescribeIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DescribeIndex(\Milvus\Proto\Milvus\DescribeIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/DescribeIndex',
        $argument,
        ['\Milvus\Proto\Milvus\DescribeIndexResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: use DescribeIndex instead
     * @param \Milvus\Proto\Milvus\GetIndexStateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIndexState(\Milvus\Proto\Milvus\GetIndexStateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetIndexState',
        $argument,
        ['\Milvus\Proto\Milvus\GetIndexStateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: use DescribeIndex instead
     * @param \Milvus\Proto\Milvus\GetIndexBuildProgressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIndexBuildProgress(\Milvus\Proto\Milvus\GetIndexBuildProgressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetIndexBuildProgress',
        $argument,
        ['\Milvus\Proto\Milvus\GetIndexBuildProgressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\DropIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DropIndex(\Milvus\Proto\Milvus\DropIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/DropIndex',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\InsertRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Insert(\Milvus\Proto\Milvus\InsertRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/Insert',
        $argument,
        ['\Milvus\Proto\Milvus\MutationResult', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\DeleteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Delete(\Milvus\Proto\Milvus\DeleteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/Delete',
        $argument,
        ['\Milvus\Proto\Milvus\MutationResult', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\UpsertRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Upsert(\Milvus\Proto\Milvus\UpsertRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/Upsert',
        $argument,
        ['\Milvus\Proto\Milvus\MutationResult', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\SearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Search(\Milvus\Proto\Milvus\SearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/Search',
        $argument,
        ['\Milvus\Proto\Milvus\SearchResults', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\FlushRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Flush(\Milvus\Proto\Milvus\FlushRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/Flush',
        $argument,
        ['\Milvus\Proto\Milvus\FlushResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\QueryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Query(\Milvus\Proto\Milvus\QueryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/Query',
        $argument,
        ['\Milvus\Proto\Milvus\QueryResults', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\CalcDistanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CalcDistance(\Milvus\Proto\Milvus\CalcDistanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/CalcDistance',
        $argument,
        ['\Milvus\Proto\Milvus\CalcDistanceResults', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\FlushAllRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FlushAll(\Milvus\Proto\Milvus\FlushAllRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/FlushAll',
        $argument,
        ['\Milvus\Proto\Milvus\FlushAllResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\GetFlushStateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetFlushState(\Milvus\Proto\Milvus\GetFlushStateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetFlushState',
        $argument,
        ['\Milvus\Proto\Milvus\GetFlushStateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\GetFlushAllStateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetFlushAllState(\Milvus\Proto\Milvus\GetFlushAllStateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetFlushAllState',
        $argument,
        ['\Milvus\Proto\Milvus\GetFlushAllStateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\GetPersistentSegmentInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPersistentSegmentInfo(\Milvus\Proto\Milvus\GetPersistentSegmentInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetPersistentSegmentInfo',
        $argument,
        ['\Milvus\Proto\Milvus\GetPersistentSegmentInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\GetQuerySegmentInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetQuerySegmentInfo(\Milvus\Proto\Milvus\GetQuerySegmentInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetQuerySegmentInfo',
        $argument,
        ['\Milvus\Proto\Milvus\GetQuerySegmentInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\GetReplicasRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetReplicas(\Milvus\Proto\Milvus\GetReplicasRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetReplicas',
        $argument,
        ['\Milvus\Proto\Milvus\GetReplicasResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\DummyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Dummy(\Milvus\Proto\Milvus\DummyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/Dummy',
        $argument,
        ['\Milvus\Proto\Milvus\DummyResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * TODO: remove
     * @param \Milvus\Proto\Milvus\RegisterLinkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RegisterLink(\Milvus\Proto\Milvus\RegisterLinkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/RegisterLink',
        $argument,
        ['\Milvus\Proto\Milvus\RegisterLinkResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * https://wiki.lfaidata.foundation/display/MIL/MEP+8+--+Add+metrics+for+proxy
     * @param \Milvus\Proto\Milvus\GetMetricsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMetrics(\Milvus\Proto\Milvus\GetMetricsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetMetrics',
        $argument,
        ['\Milvus\Proto\Milvus\GetMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\GetComponentStatesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetComponentStates(\Milvus\Proto\Milvus\GetComponentStatesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetComponentStates',
        $argument,
        ['\Milvus\Proto\Milvus\ComponentStates', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\LoadBalanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LoadBalance(\Milvus\Proto\Milvus\LoadBalanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/LoadBalance',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\GetCompactionStateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCompactionState(\Milvus\Proto\Milvus\GetCompactionStateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetCompactionState',
        $argument,
        ['\Milvus\Proto\Milvus\GetCompactionStateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\ManualCompactionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ManualCompaction(\Milvus\Proto\Milvus\ManualCompactionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/ManualCompaction',
        $argument,
        ['\Milvus\Proto\Milvus\ManualCompactionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\GetCompactionPlansRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCompactionStateWithPlans(\Milvus\Proto\Milvus\GetCompactionPlansRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetCompactionStateWithPlans',
        $argument,
        ['\Milvus\Proto\Milvus\GetCompactionPlansResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * https://wiki.lfaidata.foundation/display/MIL/MEP+24+--+Support+bulk+load
     * @param \Milvus\Proto\Milvus\ImportRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Import(\Milvus\Proto\Milvus\ImportRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/Import',
        $argument,
        ['\Milvus\Proto\Milvus\ImportResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\GetImportStateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetImportState(\Milvus\Proto\Milvus\GetImportStateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetImportState',
        $argument,
        ['\Milvus\Proto\Milvus\GetImportStateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\ListImportTasksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListImportTasks(\Milvus\Proto\Milvus\ListImportTasksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/ListImportTasks',
        $argument,
        ['\Milvus\Proto\Milvus\ListImportTasksResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * https://wiki.lfaidata.foundation/display/MIL/MEP+27+--+Support+Basic+Authentication
     * @param \Milvus\Proto\Milvus\CreateCredentialRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateCredential(\Milvus\Proto\Milvus\CreateCredentialRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/CreateCredential',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\UpdateCredentialRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCredential(\Milvus\Proto\Milvus\UpdateCredentialRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/UpdateCredential',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\DeleteCredentialRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteCredential(\Milvus\Proto\Milvus\DeleteCredentialRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/DeleteCredential',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\ListCredUsersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListCredUsers(\Milvus\Proto\Milvus\ListCredUsersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/ListCredUsers',
        $argument,
        ['\Milvus\Proto\Milvus\ListCredUsersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * https://wiki.lfaidata.foundation/display/MIL/MEP+29+--+Support+Role-Based+Access+Control
     * @param \Milvus\Proto\Milvus\CreateRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateRole(\Milvus\Proto\Milvus\CreateRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/CreateRole',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\DropRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DropRole(\Milvus\Proto\Milvus\DropRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/DropRole',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\OperateUserRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function OperateUserRole(\Milvus\Proto\Milvus\OperateUserRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/OperateUserRole',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\SelectRoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SelectRole(\Milvus\Proto\Milvus\SelectRoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/SelectRole',
        $argument,
        ['\Milvus\Proto\Milvus\SelectRoleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\SelectUserRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SelectUser(\Milvus\Proto\Milvus\SelectUserRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/SelectUser',
        $argument,
        ['\Milvus\Proto\Milvus\SelectUserResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\OperatePrivilegeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function OperatePrivilege(\Milvus\Proto\Milvus\OperatePrivilegeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/OperatePrivilege',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\SelectGrantRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SelectGrant(\Milvus\Proto\Milvus\SelectGrantRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/SelectGrant',
        $argument,
        ['\Milvus\Proto\Milvus\SelectGrantResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\GetVersionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetVersion(\Milvus\Proto\Milvus\GetVersionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/GetVersion',
        $argument,
        ['\Milvus\Proto\Milvus\GetVersionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\CheckHealthRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CheckHealth(\Milvus\Proto\Milvus\CheckHealthRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/CheckHealth',
        $argument,
        ['\Milvus\Proto\Milvus\CheckHealthResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\CreateResourceGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateResourceGroup(\Milvus\Proto\Milvus\CreateResourceGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/CreateResourceGroup',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\DropResourceGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DropResourceGroup(\Milvus\Proto\Milvus\DropResourceGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/DropResourceGroup',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\TransferNodeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TransferNode(\Milvus\Proto\Milvus\TransferNodeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/TransferNode',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\TransferReplicaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TransferReplica(\Milvus\Proto\Milvus\TransferReplicaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/TransferReplica',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\ListResourceGroupsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListResourceGroups(\Milvus\Proto\Milvus\ListResourceGroupsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/ListResourceGroups',
        $argument,
        ['\Milvus\Proto\Milvus\ListResourceGroupsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\DescribeResourceGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DescribeResourceGroup(\Milvus\Proto\Milvus\DescribeResourceGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/DescribeResourceGroup',
        $argument,
        ['\Milvus\Proto\Milvus\DescribeResourceGroupResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\RenameCollectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RenameCollection(\Milvus\Proto\Milvus\RenameCollectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/RenameCollection',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Feder\ListIndexedSegmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListIndexedSegment(\Milvus\Proto\Feder\ListIndexedSegmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/ListIndexedSegment',
        $argument,
        ['\Milvus\Proto\Feder\ListIndexedSegmentResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Feder\DescribeSegmentIndexDataRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DescribeSegmentIndexData(\Milvus\Proto\Feder\DescribeSegmentIndexDataRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.milvus.MilvusService/DescribeSegmentIndexData',
        $argument,
        ['\Milvus\Proto\Feder\DescribeSegmentIndexDataResponse', 'decode'],
        $metadata, $options);
    }

}
