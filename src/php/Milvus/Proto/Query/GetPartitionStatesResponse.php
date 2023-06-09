<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: query_coord.proto

namespace Milvus\Proto\Query;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.query.GetPartitionStatesResponse</code>
 */
class GetPartitionStatesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.query.PartitionStates partition_descriptions = 2;</code>
     */
    private $partition_descriptions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\Status $status
     *     @type array<\Milvus\Proto\Query\PartitionStates>|\Google\Protobuf\Internal\RepeatedField $partition_descriptions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\QueryCoord::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.common.Status status = 1;</code>
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
     * Generated from protobuf field <code>.milvus.proto.common.Status status = 1;</code>
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
     * Generated from protobuf field <code>repeated .milvus.proto.query.PartitionStates partition_descriptions = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPartitionDescriptions()
    {
        return $this->partition_descriptions;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.query.PartitionStates partition_descriptions = 2;</code>
     * @param array<\Milvus\Proto\Query\PartitionStates>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPartitionDescriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Query\PartitionStates::class);
        $this->partition_descriptions = $arr;

        return $this;
    }

}

