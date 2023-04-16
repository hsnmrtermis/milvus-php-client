<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Milvus\Proto\Index;

/**
 */
class IndexCoordClient extends \Grpc\BaseStub {

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
        return $this->_simpleRequest('/milvus.proto.index.IndexCoord/GetComponentStates',
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
        return $this->_simpleRequest('/milvus.proto.index.IndexCoord/GetStatisticsChannel',
        $argument,
        ['\Milvus\Proto\Milvus\StringResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.index.IndexCoord/CreateIndex',
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
        return $this->_simpleRequest('/milvus.proto.index.IndexCoord/GetIndexState',
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
        return $this->_simpleRequest('/milvus.proto.index.IndexCoord/GetSegmentIndexState',
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
        return $this->_simpleRequest('/milvus.proto.index.IndexCoord/GetIndexInfos',
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
        return $this->_simpleRequest('/milvus.proto.index.IndexCoord/DropIndex',
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
        return $this->_simpleRequest('/milvus.proto.index.IndexCoord/DescribeIndex',
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
        return $this->_simpleRequest('/milvus.proto.index.IndexCoord/GetIndexBuildProgress',
        $argument,
        ['\Milvus\Proto\Index\GetIndexBuildProgressResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.index.IndexCoord/ShowConfigurations',
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
        return $this->_simpleRequest('/milvus.proto.index.IndexCoord/GetMetrics',
        $argument,
        ['\Milvus\Proto\Milvus\GetMetricsResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.index.IndexCoord/CheckHealth',
        $argument,
        ['\Milvus\Proto\Milvus\CheckHealthResponse', 'decode'],
        $metadata, $options);
    }

}
