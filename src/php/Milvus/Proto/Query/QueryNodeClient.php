<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Milvus\Proto\Query;

/**
 */
class QueryNodeClient extends \Grpc\BaseStub {

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
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/GetComponentStates',
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
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/GetTimeTickChannel',
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
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/GetStatisticsChannel',
        $argument,
        ['\Milvus\Proto\Milvus\StringResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\WatchDmChannelsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function WatchDmChannels(\Milvus\Proto\Query\WatchDmChannelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/WatchDmChannels',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\UnsubDmChannelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnsubDmChannel(\Milvus\Proto\Query\UnsubDmChannelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/UnsubDmChannel',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\LoadSegmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function LoadSegments(\Milvus\Proto\Query\LoadSegmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/LoadSegments',
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
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/ReleaseCollection',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/LoadPartitions',
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
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/ReleasePartitions',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\ReleaseSegmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReleaseSegments(\Milvus\Proto\Query\ReleaseSegmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/ReleaseSegments',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/GetSegmentInfo',
        $argument,
        ['\Milvus\Proto\Query\GetSegmentInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\SyncReplicaSegmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SyncReplicaSegments(\Milvus\Proto\Query\SyncReplicaSegmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/SyncReplicaSegments',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\GetStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetStatistics(\Milvus\Proto\Query\GetStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/GetStatistics',
        $argument,
        ['\Milvus\Proto\Internal\GetStatisticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\SearchRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Search(\Milvus\Proto\Query\SearchRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/Search',
        $argument,
        ['\Milvus\Proto\Internal\SearchResults', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\QueryRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Query(\Milvus\Proto\Query\QueryRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/Query',
        $argument,
        ['\Milvus\Proto\Internal\RetrieveResults', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/ShowConfigurations',
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
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/GetMetrics',
        $argument,
        ['\Milvus\Proto\Milvus\GetMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\GetDataDistributionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetDataDistribution(\Milvus\Proto\Query\GetDataDistributionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/GetDataDistribution',
        $argument,
        ['\Milvus\Proto\Query\GetDataDistributionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\SyncDistributionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SyncDistribution(\Milvus\Proto\Query\SyncDistributionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/SyncDistribution',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Query\DeleteRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Delete(\Milvus\Proto\Query\DeleteRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.query.QueryNode/Delete',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

}
