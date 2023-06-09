<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: data_coord.proto

namespace Milvus\Proto\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.data.ImportTaskRequest</code>
 */
class ImportTaskRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     */
    protected $base = null;
    /**
     * Target import task.
     *
     * Generated from protobuf field <code>.milvus.proto.data.ImportTask import_task = 2;</code>
     */
    protected $import_task = null;
    /**
     * DataNodes that are currently working.
     *
     * Generated from protobuf field <code>repeated int64 working_nodes = 3;</code>
     */
    private $working_nodes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\MsgBase $base
     *     @type \Milvus\Proto\Data\ImportTask $import_task
     *           Target import task.
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $working_nodes
     *           DataNodes that are currently working.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\DataCoord::initOnce();
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
     * Target import task.
     *
     * Generated from protobuf field <code>.milvus.proto.data.ImportTask import_task = 2;</code>
     * @return \Milvus\Proto\Data\ImportTask|null
     */
    public function getImportTask()
    {
        return $this->import_task;
    }

    public function hasImportTask()
    {
        return isset($this->import_task);
    }

    public function clearImportTask()
    {
        unset($this->import_task);
    }

    /**
     * Target import task.
     *
     * Generated from protobuf field <code>.milvus.proto.data.ImportTask import_task = 2;</code>
     * @param \Milvus\Proto\Data\ImportTask $var
     * @return $this
     */
    public function setImportTask($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Data\ImportTask::class);
        $this->import_task = $var;

        return $this;
    }

    /**
     * DataNodes that are currently working.
     *
     * Generated from protobuf field <code>repeated int64 working_nodes = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWorkingNodes()
    {
        return $this->working_nodes;
    }

    /**
     * DataNodes that are currently working.
     *
     * Generated from protobuf field <code>repeated int64 working_nodes = 3;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setWorkingNodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT64);
        $this->working_nodes = $arr;

        return $this;
    }

}

