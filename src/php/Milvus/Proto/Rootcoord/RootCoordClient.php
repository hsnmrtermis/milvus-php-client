<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Milvus\Proto\Rootcoord;

/**
 */
class RootCoordClient extends \Grpc\BaseStub {

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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/GetComponentStates',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/GetTimeTickChannel',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/GetStatisticsChannel',
        $argument,
        ['\Milvus\Proto\Milvus\StringResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * @brief This method is used to create collection
     *
     * @param CreateCollectionRequest, use to provide collection information to be created.
     *
     * @return Status
     * @param \Milvus\Proto\Milvus\CreateCollectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateCollection(\Milvus\Proto\Milvus\CreateCollectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/CreateCollection',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * @brief This method is used to delete collection.
     *
     * @param DropCollectionRequest, collection name is going to be deleted.
     *
     * @return Status
     * @param \Milvus\Proto\Milvus\DropCollectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DropCollection(\Milvus\Proto\Milvus\DropCollectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/DropCollection',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * @brief This method is used to test collection existence.
     *
     * @param HasCollectionRequest, collection name is going to be tested.
     *
     * @return BoolResponse
     * @param \Milvus\Proto\Milvus\HasCollectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function HasCollection(\Milvus\Proto\Milvus\HasCollectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/HasCollection',
        $argument,
        ['\Milvus\Proto\Milvus\BoolResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * @brief This method is used to get collection schema.
     *
     * @param DescribeCollectionRequest, target collection name.
     *
     * @return CollectionSchema
     * @param \Milvus\Proto\Milvus\DescribeCollectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DescribeCollection(\Milvus\Proto\Milvus\DescribeCollectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/DescribeCollection',
        $argument,
        ['\Milvus\Proto\Milvus\DescribeCollectionResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\DescribeCollectionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DescribeCollectionInternal(\Milvus\Proto\Milvus\DescribeCollectionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/DescribeCollectionInternal',
        $argument,
        ['\Milvus\Proto\Milvus\DescribeCollectionResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/CreateAlias',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/DropAlias',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/AlterAlias',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * @brief This method is used to list all collections.
     *
     * @return StringListResponse, collection name list
     * @param \Milvus\Proto\Milvus\ShowCollectionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ShowCollections(\Milvus\Proto\Milvus\ShowCollectionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/ShowCollections',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/AlterCollection',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * @brief This method is used to create partition
     *
     * @return Status
     * @param \Milvus\Proto\Milvus\CreatePartitionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreatePartition(\Milvus\Proto\Milvus\CreatePartitionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/CreatePartition',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * @brief This method is used to drop partition
     *
     * @return Status
     * @param \Milvus\Proto\Milvus\DropPartitionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DropPartition(\Milvus\Proto\Milvus\DropPartitionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/DropPartition',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * @brief This method is used to test partition existence.
     *
     * @return BoolResponse
     * @param \Milvus\Proto\Milvus\HasPartitionRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function HasPartition(\Milvus\Proto\Milvus\HasPartitionRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/HasPartition',
        $argument,
        ['\Milvus\Proto\Milvus\BoolResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * *
     * @brief This method is used to show partition information
     *
     * @param ShowPartitionRequest, target collection name.
     *
     * @return StringListResponse
     * @param \Milvus\Proto\Milvus\ShowPartitionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ShowPartitions(\Milvus\Proto\Milvus\ShowPartitionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/ShowPartitions',
        $argument,
        ['\Milvus\Proto\Milvus\ShowPartitionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Milvus\ShowPartitionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ShowPartitionsInternal(\Milvus\Proto\Milvus\ShowPartitionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/ShowPartitionsInternal',
        $argument,
        ['\Milvus\Proto\Milvus\ShowPartitionsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *    rpc DescribeSegment(milvus.DescribeSegmentRequest) returns (milvus.DescribeSegmentResponse) {}
     * @param \Milvus\Proto\Milvus\ShowSegmentsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ShowSegments(\Milvus\Proto\Milvus\ShowSegmentsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/ShowSegments',
        $argument,
        ['\Milvus\Proto\Milvus\ShowSegmentsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     *    rpc CreateIndex(milvus.CreateIndexRequest) returns (common.Status) {}
     *    rpc DescribeIndex(milvus.DescribeIndexRequest) returns (milvus.DescribeIndexResponse) {}
     *    rpc DropIndex(milvus.DropIndexRequest) returns (common.Status) {}
     *    rpc GetIndexState(milvus.GetIndexStateRequest) returns (milvus.GetIndexStateResponse) {}
     *
     * @param \Milvus\Proto\Rootcoord\AllocTimestampRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AllocTimestamp(\Milvus\Proto\Rootcoord\AllocTimestampRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/AllocTimestamp',
        $argument,
        ['\Milvus\Proto\Rootcoord\AllocTimestampResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Rootcoord\AllocIDRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function AllocID(\Milvus\Proto\Rootcoord\AllocIDRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/AllocID',
        $argument,
        ['\Milvus\Proto\Rootcoord\AllocIDResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Internal\ChannelTimeTickMsg $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateChannelTimeTick(\Milvus\Proto\Internal\ChannelTimeTickMsg $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/UpdateChannelTimeTick',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Proxy\InvalidateCollMetaCacheRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function InvalidateCollectionMetaCache(\Milvus\Proto\Proxy\InvalidateCollMetaCacheRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/InvalidateCollectionMetaCache',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/ShowConfigurations',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/GetMetrics',
        $argument,
        ['\Milvus\Proto\Milvus\GetMetricsResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/Import',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/GetImportState',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/ListImportTasks',
        $argument,
        ['\Milvus\Proto\Milvus\ListImportTasksResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Rootcoord\ImportResult $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReportImport(\Milvus\Proto\Rootcoord\ImportResult $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/ReportImport',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * https://wiki.lfaidata.foundation/display/MIL/MEP+27+--+Support+Basic+Authentication
     * @param \Milvus\Proto\Internal\CredentialInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateCredential(\Milvus\Proto\Internal\CredentialInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/CreateCredential',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Internal\CredentialInfo $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateCredential(\Milvus\Proto\Internal\CredentialInfo $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/UpdateCredential',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/DeleteCredential',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/ListCredUsers',
        $argument,
        ['\Milvus\Proto\Milvus\ListCredUsersResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * userd by proxy, not exposed to sdk
     * @param \Milvus\Proto\Rootcoord\GetCredentialRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetCredential(\Milvus\Proto\Rootcoord\GetCredentialRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/GetCredential',
        $argument,
        ['\Milvus\Proto\Rootcoord\GetCredentialResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/CreateRole',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/DropRole',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/OperateUserRole',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/SelectRole',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/SelectUser',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/OperatePrivilege',
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/SelectGrant',
        $argument,
        ['\Milvus\Proto\Milvus\SelectGrantResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Milvus\Proto\Internal\ListPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListPolicy(\Milvus\Proto\Internal\ListPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/ListPolicy',
        $argument,
        ['\Milvus\Proto\Internal\ListPolicyResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/CheckHealth',
        $argument,
        ['\Milvus\Proto\Milvus\CheckHealthResponse', 'decode'],
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
        return $this->_simpleRequest('/milvus.proto.rootcoord.RootCoord/RenameCollection',
        $argument,
        ['\Milvus\Proto\Common\Status', 'decode'],
        $metadata, $options);
    }

}
