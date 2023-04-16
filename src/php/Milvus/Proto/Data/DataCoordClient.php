<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Milvus\Proto\Data;

/**
 */
class DataCoordClient extends \Grpc\BaseStub {

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
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetComponentStates',
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
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetTimeTickChannel',
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
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetStatisticsChannel',
        $argument,
        ['\Milvus\Proto\Milvus\StringResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\FlushRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function Flush(\Milvus\Proto\Data\FlushRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/Flush',
        $argument,
        ['\Milvus\Proto\Data\FlushResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\AssignSegmentIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AssignSegmentID(\Milvus\Proto\Data\AssignSegmentIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/AssignSegmentID',
        $argument,
        ['\Milvus\Proto\Data\AssignSegmentIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\GetSegmentInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSegmentInfo(\Milvus\Proto\Data\GetSegmentInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetSegmentInfo',
        $argument,
        ['\Milvus\Proto\Data\GetSegmentInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\GetSegmentStatesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSegmentStates(\Milvus\Proto\Data\GetSegmentStatesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetSegmentStates',
        $argument,
        ['\Milvus\Proto\Data\GetSegmentStatesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\GetInsertBinlogPathsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetInsertBinlogPaths(\Milvus\Proto\Data\GetInsertBinlogPathsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetInsertBinlogPaths',
        $argument,
        ['\Milvus\Proto\Data\GetInsertBinlogPathsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\GetCollectionStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCollectionStatistics(\Milvus\Proto\Data\GetCollectionStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetCollectionStatistics',
        $argument,
        ['\Milvus\Proto\Data\GetCollectionStatisticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\GetPartitionStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPartitionStatistics(\Milvus\Proto\Data\GetPartitionStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetPartitionStatistics',
        $argument,
        ['\Milvus\Proto\Data\GetPartitionStatisticsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\GetSegmentInfoChannelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSegmentInfoChannel(\Milvus\Proto\Data\GetSegmentInfoChannelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetSegmentInfoChannel',
        $argument,
        ['\Milvus\Proto\Milvus\StringResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\SaveBinlogPathsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SaveBinlogPaths(\Milvus\Proto\Data\SaveBinlogPathsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/SaveBinlogPaths',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\GetRecoveryInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetRecoveryInfo(\Milvus\Proto\Data\GetRecoveryInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetRecoveryInfo',
        $argument,
        ['\Milvus\Proto\Data\GetRecoveryInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\GetFlushedSegmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetFlushedSegments(\Milvus\Proto\Data\GetFlushedSegmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetFlushedSegments',
        $argument,
        ['\Milvus\Proto\Data\GetFlushedSegmentsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\GetSegmentsByStatesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSegmentsByStates(\Milvus\Proto\Data\GetSegmentsByStatesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetSegmentsByStates',
        $argument,
        ['\Milvus\Proto\Data\GetSegmentsByStatesResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetFlushAllState',
        $argument,
        ['\Milvus\Proto\Milvus\GetFlushAllStateResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/ShowConfigurations',
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
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetMetrics',
        $argument,
        ['\Milvus\Proto\Milvus\GetMetricsResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/ManualCompaction',
        $argument,
        ['\Milvus\Proto\Milvus\ManualCompactionResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetCompactionState',
        $argument,
        ['\Milvus\Proto\Milvus\GetCompactionStateResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetCompactionStateWithPlans',
        $argument,
        ['\Milvus\Proto\Milvus\GetCompactionPlansResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\WatchChannelsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function WatchChannels(\Milvus\Proto\Data\WatchChannelsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/WatchChannels',
        $argument,
        ['\Milvus\Proto\Data\WatchChannelsResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetFlushState',
        $argument,
        ['\Milvus\Proto\Milvus\GetFlushStateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\DropVirtualChannelRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DropVirtualChannel(\Milvus\Proto\Data\DropVirtualChannelRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/DropVirtualChannel',
        $argument,
        ['\Milvus\Proto\Data\DropVirtualChannelResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\SetSegmentStateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetSegmentState(\Milvus\Proto\Data\SetSegmentStateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/SetSegmentState',
        $argument,
        ['\Milvus\Proto\Data\SetSegmentStateResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/Import',
        $argument,
        ['\Milvus\Proto\Data\ImportTaskResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\UpdateSegmentStatisticsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateSegmentStatistics(\Milvus\Proto\Data\UpdateSegmentStatisticsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/UpdateSegmentStatistics',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\UpdateChannelCheckpointRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateChannelCheckpoint(\Milvus\Proto\Data\UpdateChannelCheckpointRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/UpdateChannelCheckpoint',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\SaveImportSegmentRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SaveImportSegment(\Milvus\Proto\Data\SaveImportSegmentRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/SaveImportSegment',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\UnsetIsImportingStateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UnsetIsImportingState(\Milvus\Proto\Data\UnsetIsImportingStateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/UnsetIsImportingState',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\MarkSegmentsDroppedRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function MarkSegmentsDropped(\Milvus\Proto\Data\MarkSegmentsDroppedRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/MarkSegmentsDropped',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\AlterCollectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function BroadcastAlteredCollection(\Milvus\Proto\Data\AlterCollectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/BroadcastAlteredCollection',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/CheckHealth',
        $argument,
        ['\Milvus\Proto\Milvus\CheckHealthResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Index\CreateIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateIndex(\Milvus\Proto\Index\CreateIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/CreateIndex',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: use DescribeIndex instead
     * @param \Milvus\Proto\Index\GetIndexStateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIndexState(\Milvus\Proto\Index\GetIndexStateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetIndexState',
        $argument,
        ['\Milvus\Proto\Index\GetIndexStateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Index\GetSegmentIndexStateRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetSegmentIndexState(\Milvus\Proto\Index\GetSegmentIndexStateRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetSegmentIndexState',
        $argument,
        ['\Milvus\Proto\Index\GetSegmentIndexStateResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Index\GetIndexInfoRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIndexInfos(\Milvus\Proto\Index\GetIndexInfoRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetIndexInfos',
        $argument,
        ['\Milvus\Proto\Index\GetIndexInfoResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Index\DropIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DropIndex(\Milvus\Proto\Index\DropIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/DropIndex',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Index\DescribeIndexRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DescribeIndex(\Milvus\Proto\Index\DescribeIndexRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/DescribeIndex',
        $argument,
        ['\Milvus\Proto\Index\DescribeIndexResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Deprecated: use DescribeIndex instead
     * @param \Milvus\Proto\Index\GetIndexBuildProgressRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetIndexBuildProgress(\Milvus\Proto\Index\GetIndexBuildProgressRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GetIndexBuildProgress',
        $argument,
        ['\Milvus\Proto\Index\GetIndexBuildProgressResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Data\GcConfirmRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GcConfirm(\Milvus\Proto\Data\GcConfirmRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.data.DataCoord/GcConfirm',
        $argument,
        ['\Milvus\Proto\Data\GcConfirmResponse', 'decode'],
        $metadata, $options);
    }

}
