<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: index_coord.proto

namespace Milvus\Proto\Index;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.index.SegmentIndexState</code>
 */
class SegmentIndexState extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 segmentID = 1;</code>
     */
    protected $segmentID = 0;
    /**
     * Generated from protobuf field <code>.milvus.proto.common.IndexState state = 2;</code>
     */
    protected $state = 0;
    /**
     * Generated from protobuf field <code>string fail_reason = 3;</code>
     */
    protected $fail_reason = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $segmentID
     *     @type int $state
     *     @type string $fail_reason
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IndexCoord::initOnce();
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
     * Generated from protobuf field <code>.milvus.proto.common.IndexState state = 2;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.IndexState state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Milvus\Proto\Common\IndexState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fail_reason = 3;</code>
     * @return string
     */
    public function getFailReason()
    {
        return $this->fail_reason;
    }

    /**
     * Generated from protobuf field <code>string fail_reason = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFailReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->fail_reason = $var;

        return $this;
    }

}

