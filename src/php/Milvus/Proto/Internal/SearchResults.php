<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: internal.proto

namespace Milvus\Proto\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.internal.SearchResults</code>
 */
class SearchResults extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     */
    protected $base = null;
    /**
     * Generated from protobuf field <code>.milvus.proto.common.Status status = 2;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>int64 reqID = 3;</code>
     */
    protected $reqID = 0;
    /**
     * Generated from protobuf field <code>string metric_type = 4;</code>
     */
    protected $metric_type = '';
    /**
     * Generated from protobuf field <code>int64 num_queries = 5;</code>
     */
    protected $num_queries = 0;
    /**
     * Generated from protobuf field <code>int64 top_k = 6;</code>
     */
    protected $top_k = 0;
    /**
     * Generated from protobuf field <code>repeated int64 sealed_segmentIDs_searched = 7;</code>
     */
    private $sealed_segmentIDs_searched;
    /**
     * Generated from protobuf field <code>repeated string channelIDs_searched = 8;</code>
     */
    private $channelIDs_searched;
    /**
     * Generated from protobuf field <code>repeated int64 global_sealed_segmentIDs = 9;</code>
     */
    private $global_sealed_segmentIDs;
    /**
     * schema.SearchResultsData inside
     *
     * Generated from protobuf field <code>bytes sliced_blob = 10;</code>
     */
    protected $sliced_blob = '';
    /**
     * Generated from protobuf field <code>int64 sliced_num_count = 11;</code>
     */
    protected $sliced_num_count = 0;
    /**
     * Generated from protobuf field <code>int64 sliced_offset = 12;</code>
     */
    protected $sliced_offset = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\MsgBase $base
     *     @type \Milvus\Proto\Common\Status $status
     *     @type int|string $reqID
     *     @type string $metric_type
     *     @type int|string $num_queries
     *     @type int|string $top_k
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $sealed_segmentIDs_searched
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $channelIDs_searched
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $global_sealed_segmentIDs
     *     @type string $sliced_blob
     *           schema.SearchResultsData inside
     *     @type int|string $sliced_num_count
     *     @type int|string $sliced_offset
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Internal::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     * @return \Milvus\Proto\Common\MsgBase|null
     */
    public function getBase()
    {
        return $this->base;
    }

    public function hasBase()
    {
        return isset($this->base);
    }

    public function clearBase()
    {
        unset($this->base);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     * @param \Milvus\Proto\Common\MsgBase $var
     * @return $this
     */
    public function setBase($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Common\MsgBase::class);
        $this->base = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.Status status = 2;</code>
     * @return \Milvus\Proto\Common\Status|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.Status status = 2;</code>
     * @param \Milvus\Proto\Common\Status $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Common\Status::class);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 reqID = 3;</code>
     * @return int|string
     */
    public function getReqID()
    {
        return $this->reqID;
    }

    /**
     * Generated from protobuf field <code>int64 reqID = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setReqID($var)
    {
        GPBUtil::checkInt64($var);
        $this->reqID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string metric_type = 4;</code>
     * @return string
     */
    public function getMetricType()
    {
        return $this->metric_type;
    }

    /**
     * Generated from protobuf field <code>string metric_type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMetricType($var)
    {
        GPBUtil::checkString($var, True);
        $this->metric_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 num_queries = 5;</code>
     * @return int|string
     */
    public function getNumQueries()
    {
        return $this->num_queries;
    }

    /**
     * Generated from protobuf field <code>int64 num_queries = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNumQueries($var)
    {
        GPBUtil::checkInt64($var);
        $this->num_queries = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 top_k = 6;</code>
     * @return int|string
     */
    public function getTopK()
    {
        return $this->top_k;
    }

    /**
     * Generated from protobuf field <code>int64 top_k = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTopK($var)
    {
        GPBUtil::checkInt64($var);
        $this->top_k = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 sealed_segmentIDs_searched = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSealedSegmentIDsSearched()
    {
        return $this->sealed_segmentIDs_searched;
    }

    /**
     * Generated from protobuf field <code>repeated int64 sealed_segmentIDs_searched = 7;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSealedSegmentIDsSearched($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->sealed_segmentIDs_searched = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string channelIDs_searched = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannelIDsSearched()
    {
        return $this->channelIDs_searched;
    }

    /**
     * Generated from protobuf field <code>repeated string channelIDs_searched = 8;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannelIDsSearched($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->channelIDs_searched = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int64 global_sealed_segmentIDs = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getGlobalSealedSegmentIDs()
    {
        return $this->global_sealed_segmentIDs;
    }

    /**
     * Generated from protobuf field <code>repeated int64 global_sealed_segmentIDs = 9;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setGlobalSealedSegmentIDs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->global_sealed_segmentIDs = $arr;

        return $this;
    }

    /**
     * schema.SearchResultsData inside
     *
     * Generated from protobuf field <code>bytes sliced_blob = 10;</code>
     * @return string
     */
    public function getSlicedBlob()
    {
        return $this->sliced_blob;
    }

    /**
     * schema.SearchResultsData inside
     *
     * Generated from protobuf field <code>bytes sliced_blob = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setSlicedBlob($var)
    {
        GPBUtil::checkString($var, False);
        $this->sliced_blob = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 sliced_num_count = 11;</code>
     * @return int|string
     */
    public function getSlicedNumCount()
    {
        return $this->sliced_num_count;
    }

    /**
     * Generated from protobuf field <code>int64 sliced_num_count = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSlicedNumCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->sliced_num_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 sliced_offset = 12;</code>
     * @return int|string
     */
    public function getSlicedOffset()
    {
        return $this->sliced_offset;
    }

    /**
     * Generated from protobuf field <code>int64 sliced_offset = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSlicedOffset($var)
    {
        GPBUtil::checkInt64($var);
        $this->sliced_offset = $var;

        return $this;
    }

}

