<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: data_coord.proto

namespace Milvus\Proto\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.data.ImportTask</code>
 */
class ImportTask extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.Status status = 1;</code>
     */
    protected $status = null;
    /**
     * target collection ID
     *
     * Generated from protobuf field <code>int64 collection_id = 2;</code>
     */
    protected $collection_id = 0;
    /**
     * target partition ID
     *
     * Generated from protobuf field <code>int64 partition_id = 3;</code>
     */
    protected $partition_id = 0;
    /**
     * target channel names of the collection.
     *
     * Generated from protobuf field <code>repeated string channel_names = 4;</code>
     */
    private $channel_names;
    /**
     * the file is row-based or column-based
     *
     * Generated from protobuf field <code>bool row_based = 5;</code>
     */
    protected $row_based = false;
    /**
     * id of the task
     *
     * Generated from protobuf field <code>int64 task_id = 6;</code>
     */
    protected $task_id = 0;
    /**
     * file paths to be imported
     *
     * Generated from protobuf field <code>repeated string files = 7;</code>
     */
    private $files;
    /**
     * extra information about the task, bucket, etc.
     *
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyValuePair infos = 8;</code>
     */
    private $infos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\Status $status
     *     @type int|string $collection_id
     *           target collection ID
     *     @type int|string $partition_id
     *           target partition ID
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $channel_names
     *           target channel names of the collection.
     *     @type bool $row_based
     *           the file is row-based or column-based
     *     @type int|string $task_id
     *           id of the task
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $files
     *           file paths to be imported
     *     @type array<\Milvus\Proto\Common\KeyValuePair>|\Google\Protobuf\Internal\RepeatedField $infos
     *           extra information about the task, bucket, etc.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\DataCoord::initOnce();
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
     * target collection ID
     *
     * Generated from protobuf field <code>int64 collection_id = 2;</code>
     * @return int|string
     */
    public function getCollectionId()
    {
        return $this->collection_id;
    }

    /**
     * target collection ID
     *
     * Generated from protobuf field <code>int64 collection_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCollectionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->collection_id = $var;

        return $this;
    }

    /**
     * target partition ID
     *
     * Generated from protobuf field <code>int64 partition_id = 3;</code>
     * @return int|string
     */
    public function getPartitionId()
    {
        return $this->partition_id;
    }

    /**
     * target partition ID
     *
     * Generated from protobuf field <code>int64 partition_id = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPartitionId($var)
    {
        GPBUtil::checkInt64($var);
        $this->partition_id = $var;

        return $this;
    }

    /**
     * target channel names of the collection.
     *
     * Generated from protobuf field <code>repeated string channel_names = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannelNames()
    {
        return $this->channel_names;
    }

    /**
     * target channel names of the collection.
     *
     * Generated from protobuf field <code>repeated string channel_names = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannelNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->channel_names = $arr;

        return $this;
    }

    /**
     * the file is row-based or column-based
     *
     * Generated from protobuf field <code>bool row_based = 5;</code>
     * @return bool
     */
    public function getRowBased()
    {
        return $this->row_based;
    }

    /**
     * the file is row-based or column-based
     *
     * Generated from protobuf field <code>bool row_based = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setRowBased($var)
    {
        GPBUtil::checkBool($var);
        $this->row_based = $var;

        return $this;
    }

    /**
     * id of the task
     *
     * Generated from protobuf field <code>int64 task_id = 6;</code>
     * @return int|string
     */
    public function getTaskId()
    {
        return $this->task_id;
    }

    /**
     * id of the task
     *
     * Generated from protobuf field <code>int64 task_id = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTaskId($var)
    {
        GPBUtil::checkInt64($var);
        $this->task_id = $var;

        return $this;
    }

    /**
     * file paths to be imported
     *
     * Generated from protobuf field <code>repeated string files = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * file paths to be imported
     *
     * Generated from protobuf field <code>repeated string files = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFiles($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->files = $arr;

        return $this;
    }

    /**
     * extra information about the task, bucket, etc.
     *
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyValuePair infos = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInfos()
    {
        return $this->infos;
    }

    /**
     * extra information about the task, bucket, etc.
     *
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyValuePair infos = 8;</code>
     * @param array<\Milvus\Proto\Common\KeyValuePair>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Common\KeyValuePair::class);
        $this->infos = $arr;

        return $this;
    }

}

