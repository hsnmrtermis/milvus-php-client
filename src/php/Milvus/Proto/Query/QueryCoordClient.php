<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Milvus\Proto\Query;

/**
 */
class QueryCoordClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Milvus\Proto\Milvus\GetComponentStatesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetComponentStates(\Milvus\Proto\Milvus\GetComponentStatesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/GetComponentStates',
        $argument,
        ['\Milvus\Proto\Milvus\ComponentStates', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Internal\GetTimeTickChannelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetTimeTickChannel(\Milvus\Proto\Internal\GetTimeTickChannelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/GetTimeTickChannel',
        $argument,
        ['\Milvus\Proto\Milvus\StringResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Internal\GetStatisticsChannelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetStatisticsChannel(\Milvus\Proto\Internal\GetStatisticsChannelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/GetStatisticsChannel',
        $argument,
        ['\Milvus\Proto\Milvus\StringResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\ShowCollectionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ShowCollections(\Milvus\Proto\Query\ShowCollectionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/ShowCollections',
        $argument,
        ['\Milvus\Proto\Query\ShowCollectionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\ShowPartitionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ShowPartitions(\Milvus\Proto\Query\ShowPartitionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/ShowPartitions',
        $argument,
        ['\Milvus\Proto\Query\ShowPartitionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\LoadPartitionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LoadPartitions(\Milvus\Proto\Query\LoadPartitionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/LoadPartitions',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\ReleasePartitionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReleasePartitions(\Milvus\Proto\Query\ReleasePartitionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/ReleasePartitions',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\LoadCollectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LoadCollection(\Milvus\Proto\Query\LoadCollectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/LoadCollection',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\ReleaseCollectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReleaseCollection(\Milvus\Proto\Query\ReleaseCollectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/ReleaseCollection',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\SyncNewCreatedPartitionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SyncNewCreatedPartition(\Milvus\Proto\Query\SyncNewCreatedPartitionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/SyncNewCreatedPartition',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\GetPartitionStatesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPartitionStates(\Milvus\Proto\Query\GetPartitionStatesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/GetPartitionStates',
        $argument,
        ['\Milvus\Proto\Query\GetPartitionStatesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\GetSegmentInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSegmentInfo(\Milvus\Proto\Query\GetSegmentInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/GetSegmentInfo',
        $argument,
        ['\Milvus\Proto\Query\GetSegmentInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\LoadBalanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LoadBalance(\Milvus\Proto\Query\LoadBalanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/LoadBalance',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Internal\ShowConfigurationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ShowConfigurations(\Milvus\Proto\Internal\ShowConfigurationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/ShowConfigurations',
        $argument,
        ['\Milvus\Proto\Internal\ShowConfigurationsResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/GetMetrics',
        $argument,
        ['\Milvus\Proto\Milvus\GetMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * https://wiki.lfaidata.foundation/display/MIL/MEP+23+--+Multiple+memory+replication+design
     * @param \Milvus\Proto\Milvus\GetReplicasRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetReplicas(\Milvus\Proto\Milvus\GetReplicasRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/GetReplicas',
        $argument,
        ['\Milvus\Proto\Milvus\GetReplicasResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\GetShardLeadersRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetShardLeaders(\Milvus\Proto\Query\GetShardLeadersRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/GetShardLeaders',
        $argument,
        ['\Milvus\Proto\Query\GetShardLeadersResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/CheckHealth',
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
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/CreateResourceGroup',
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
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/DropResourceGroup',
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
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/TransferNode',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\TransferReplicaRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TransferReplica(\Milvus\Proto\Query\TransferReplicaRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/TransferReplica',
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
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/ListResourceGroups',
        $argument,
        ['\Milvus\Proto\Milvus\ListResourceGroupsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\DescribeResourceGroupRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DescribeResourceGroup(\Milvus\Proto\Query\DescribeResourceGroupRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryCoord/DescribeResourceGroup',
        $argument,
        ['\Milvus\Proto\Query\DescribeResourceGroupResponse', 'decode'],
        $metadata, $options);
    }

}
