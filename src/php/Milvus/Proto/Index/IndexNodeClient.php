<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Milvus\Proto\Index;

/**
 */
class IndexNodeClient extends \Grpc\BaseStub {

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
        return $this->_simpleRequest('/milvus.proto.index.IndexNode/GetComponentStates',
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
        return $this->_simpleRequest('/milvus.proto.index.IndexNode/GetStatisticsChannel',
        $argument,
        ['\Milvus\Proto\Milvus\StringResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Index\CreateJobRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateJob(\Milvus\Proto\Index\CreateJobRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.index.IndexNode/CreateJob',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Index\QueryJobsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function QueryJobs(\Milvus\Proto\Index\QueryJobsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.index.IndexNode/QueryJobs',
        $argument,
        ['\Milvus\Proto\Index\QueryJobsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Index\DropJobsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DropJobs(\Milvus\Proto\Index\DropJobsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.index.IndexNode/DropJobs',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Index\GetJobStatsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetJobStats(\Milvus\Proto\Index\GetJobStatsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.index.IndexNode/GetJobStats',
        $argument,
        ['\Milvus\Proto\Index\GetJobStatsResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.index.IndexNode/ShowConfigurations',
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
        return $this->_simpleRequest('/milvus.proto.index.IndexNode/GetMetrics',
        $argument,
        ['\Milvus\Proto\Milvus\GetMetricsResponse', 'decode'],
        $metadata, $options);
    }

}
