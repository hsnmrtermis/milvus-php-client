<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: query_coord.proto

namespace Milvus\Proto\Query;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.query.SegmentInfo</code>
 */
class SegmentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 segmentID = 1;</code>
     */
    protected $segmentID = 0;
    /**
     * Generated from protobuf field <code>int64 collectionID = 2;</code>
     */
    protected $collectionID = 0;
    /**
     * Generated from protobuf field <code>int64 partitionID = 3;</code>
     */
    protected $partitionID = 0;
    /**
     * deprecated, check node_ids(NodeIds) field
     *
     * Generated from protobuf field <code>int64 nodeID = 4;</code>
     */
    protected $nodeID = 0;
    /**
     * Generated from protobuf field <code>int64 mem_size = 5;</code>
     */
    protected $mem_size = 0;
    /**
     * Generated from protobuf field <code>int64 num_rows = 6;</code>
     */
    protected $num_rows = 0;
    /**
     * Generated from protobuf field <code>string index_name = 7;</code>
     */
    protected $index_name = '';
    /**
     * Generated from protobuf field <code>int64 indexID = 8;</code>
     */
    protected $indexID = 0;
    /**
     * Generated from protobuf field <code>string dmChannel = 9;</code>
     */
    protected $dmChannel = '';
    /**
     * Generated from protobuf field <code>repeated int64 compactionFrom = 10;</code>
     */
    private $compactionFrom;
    /**
     * Generated from protobuf field <code>bool createdByCompaction = 11;</code>
     */
    protected $createdByCompaction = false;
    /**
     * Generated from protobuf field <code>.milvus.proto.common.SegmentState segment_state = 12;</code>
     */
    protected $segment_state = 0;
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.query.FieldIndexInfo index_infos = 13;</code>
     */
    private $index_infos;
    /**
     * Generated from protobuf field <code>repeated int64 replica_ids = 14;</code>
     */
    private $replica_ids;
    /**
     * Generated from protobuf field <code>repeated int64 node_ids = 15;</code>
     */
    private $node_ids;
    /**
     * Generated from protobuf field <code>bool enable_index = 16;</code>
     */
    protected $enable_index = false;
    /**
     * Generated from protobuf field <code>bool is_fake = 17;</code>
     */
    protected $is_fake = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $segmentID
     *     @type int|string $collectionID
     *     @type int|string $partitionID
     *     @type int|string $nodeID
     *           deprecated, check node_ids(NodeIds) field
     *     @type int|string $mem_size
     *     @type int|string $num_rows
     *     @type string $index_name
     *     @type int|string $indexID
     *     @type string $dmChannel
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $compactionFrom
     *     @type bool $createdByCompaction
     *     @type int $segment_state
     *     @type array<\Milvus\Proto\Query\FieldIndexInfo>|\Google\Protobuf\Internal\RepeatedField $index_infos
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $replica_ids
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $node_ids
     *     @type bool $enable_index
     *     @type bool $is_fake
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\QueryCoord::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 segmentID = 1;</code>
     * @return int|string
     */
    public function getSegmentID()
    {
        return $this->segmentID;
    }

    /**
     * Generated from protobuf field <code>int64 segmentID = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSegmentID($var)
    {
        GPBUtil::checkInt64($var);
        $this->segmentID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 collectionID = 2;</code>
     * @return int|string
     */
    public function getCollectionID()
    {
        return $this->collectionID;
    }

    /**
     * Generated from protobuf field <code>int64 collectionID = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCollectionID($var)
    {
        GPBUtil::checkInt64($var);
        $this->collectionID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 partitionID = 3;</code>
     * @return int|string
     */
    public function getPartitionID()
    {
        return $this->partitionID;
    }

    /**
     * Generated from protobuf field <code>int64 partitionID = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPartitionID($var)
    {
        GPBUtil::checkInt64($var);
        $this->partitionID = $var;

        return $this;
    }

    /**
     * deprecated, check node_ids(NodeIds) field
     *
     * Generated from protobuf field <code>int64 nodeID = 4;</code>
     * @return int|string
     */
    public function getNodeID()
    {
        return $this->nodeID;
    }

    /**
     * deprecated, check node_ids(NodeIds) field
     *
     * Generated from protobuf field <code>int64 nodeID = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNodeID($var)
    {
        GPBUtil::checkInt64($var);
        $this->nodeID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 mem_size = 5;</code>
     * @return int|string
     */
    public function getMemSize()
    {
        return $this->mem_size;
    }

    /**
     * Generated from protobuf field <code>int64 mem_size = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMemSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->mem_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 num_rows = 6;</code>
     * @return int|string
     */
    public function getNumRows()
    {
        return $this->num_rows;
    }

    /**
     * Generated from protobuf field <code>int64 num_rows = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNumRows($var)
    {
        GPBUtil::checkInt64($var);
        $this->num_rows = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string index_name = 7;</code>
     * @return string
     */
    public function getIndexName()
    {
        return $this->index_name;
    }

    /**
     * Generated from protobuf field <code>string index_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setIndexName($var)
    {
        GPBUtil::checkString($var, True);
        $this->index_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 indexID = 8;</code>
     * @return int|string
     */
    public function getIndexID()
    {
        return $this->indexID;
    }

    /**
     * Generated from protobuf field <code>int64 indexID = 8;</code>
     * @param int|string $var
     * @return $this
     */
    public function setIndexID($var)
    {
        GPBUtil::checkInt64($var);
        $this->indexID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string dmChannel = 9;</code>
     * @return string
     */
    public function getDmChannel()
    {
        return $this->dmChannel;
    }

    /**
     * Generated from protobuf field <code>string dmChannel = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setDmChannel($var)
    {
        GPBUtil::checkString($var, True);
        $this->dmChannel = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 compactionFrom = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCompactionFrom()
    {
        return $this->compactionFrom;
    }

    /**
     * Generated from protobuf field <code>repeated int64 compactionFrom = 10;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCompactionFrom($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->compactionFrom = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool createdByCompaction = 11;</code>
     * @return bool
     */
    public function getCreatedByCompaction()
    {
        return $this->createdByCompaction;
    }

    /**
     * Generated from protobuf field <code>bool createdByCompaction = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setCreatedByCompaction($var)
    {
        GPBUtil::checkBool($var);
        $this->createdByCompaction = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.SegmentState segment_state = 12;</code>
     * @return int
     */
    public function getSegmentState()
    {
        return $this->segment_state;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.SegmentState segment_state = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setSegmentState($var)
    {
        GPBUtil::checkEnum($var, \Milvus\Proto\Common\SegmentState::class);
        $this->segment_state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.query.FieldIndexInfo index_infos = 13;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIndexInfos()
    {
        return $this->index_infos;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.query.FieldIndexInfo index_infos = 13;</code>
     * @param array<\Milvus\Proto\Query\FieldIndexInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIndexInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Query\FieldIndexInfo::class);
        $this->index_infos = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 replica_ids = 14;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReplicaIds()
    {
        return $this->replica_ids;
    }

    /**
     * Generated from protobuf field <code>repeated int64 replica_ids = 14;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReplicaIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->replica_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 node_ids = 15;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodeIds()
    {
        return $this->node_ids;
    }

    /**
     * Generated from protobuf field <code>repeated int64 node_ids = 15;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodeIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->node_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool enable_index = 16;</code>
     * @return bool
     */
    public function getEnableIndex()
    {
        return $this->enable_index;
    }

    /**
     * Generated from protobuf field <code>bool enable_index = 16;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableIndex($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_fake = 17;</code>
     * @return bool
     */
    public function getIsFake()
    {
        return $this->is_fake;
    }

    /**
     * Generated from protobuf field <code>bool is_fake = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFake($var)
    {
        GPBUtil::checkBool($var);
        $this->is_fake = $var;

        return $this;
    }

}

