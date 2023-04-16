<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Milvus\Proto\Data;

/**
 */
class DataNodeClient extends \Grpc\BaseStub {

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
        return $this->_simpleRequest('/milvus.proto.data.DataNode/GetComponentStates',
        $argument,
        ['\Milvus\Proto\Milvus\ComponentStates', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.data.DataNode/GetStatisticsChannel',
        $argument,
        ['\Milvus\Proto\Milvus\StringResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\WatchDmChannelsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function WatchDmChannels(\Milvus\Proto\Data\WatchDmChannelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataNode/WatchDmChannels',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\FlushSegmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function FlushSegments(\Milvus\Proto\Data\FlushSegmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataNode/FlushSegments',
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
        return $this->_simpleRequest('/milvus.proto.data.DataNode/ShowConfigurations',
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
        return $this->_simpleRequest('/milvus.proto.data.DataNode/GetMetrics',
        $argument,
        ['\Milvus\Proto\Milvus\GetMetricsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\CompactionPlan $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Compaction(\Milvus\Proto\Data\CompactionPlan $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataNode/Compaction',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\CompactionStateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCompactionState(\Milvus\Proto\Data\CompactionStateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataNode/GetCompactionState',
        $argument,
        ['\Milvus\Proto\Data\CompactionStateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\SyncSegmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SyncSegments(\Milvus\Proto\Data\SyncSegmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataNode/SyncSegments',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * https://wiki.lfaidata.foundation/display/MIL/MEP+24+--+Support+bulk+load
     * @param \Milvus\Proto\Data\ImportTaskRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Import(\Milvus\Proto\Data\ImportTaskRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataNode/Import',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\ResendSegmentStatsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResendSegmentStats(\Milvus\Proto\Data\ResendSegmentStatsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataNode/ResendSegmentStats',
        $argument,
        ['\Milvus\Proto\Data\ResendSegmentStatsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\AddImportSegmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AddImportSegment(\Milvus\Proto\Data\AddImportSegmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataNode/AddImportSegment',
        $argument,
        ['\Milvus\Proto\Data\AddImportSegmentResponse', 'decode'],
        $metadata, $options);
    }

}
