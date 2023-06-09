<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: data_coord.proto

namespace Milvus\Proto\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.data.DeltaLogInfo</code>
 */
class DeltaLogInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint64 record_entries = 1;</code>
     */
    protected $record_entries = 0;
    /**
     * Generated from protobuf field <code>uint64 timestamp_from = 2;</code>
     */
    protected $timestamp_from = 0;
    /**
     * Generated from protobuf field <code>uint64 timestamp_to = 3;</code>
     */
    protected $timestamp_to = 0;
    /**
     * Generated from protobuf field <code>string delta_log_path = 4;</code>
     */
    protected $delta_log_path = '';
    /**
     * Generated from protobuf field <code>int64 delta_log_size = 5;</code>
     */
    protected $delta_log_size = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $record_entries
     *     @type int|string $timestamp_from
     *     @type int|string $timestamp_to
     *     @type string $delta_log_path
     *     @type int|string $delta_log_size
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\DataCoord::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>uint64 record_entries = 1;</code>
     * @return int|string
     */
    public function getRecordEntries()
    {
        return $this->record_entries;
    }

    /**
     * Generated from protobuf field <code>uint64 record_entries = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRecordEntries($var)
    {
        GPBUtil::checkUint64($var);
        $this->record_entries = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 timestamp_from = 2;</code>
     * @return int|string
     */
    public function getTimestampFrom()
    {
        return $this->timestamp_from;
    }

    /**
     * Generated from protobuf field <code>uint64 timestamp_from = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestampFrom($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp_from = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 timestamp_to = 3;</code>
     * @return int|string
     */
    public function getTimestampTo()
    {
        return $this->timestamp_to;
    }

    /**
     * Generated from protobuf field <code>uint64 timestamp_to = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestampTo($var)
    {
        GPBUtil::checkUint64($var);
        $this->timestamp_to = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string delta_log_path = 4;</code>
     * @return string
     */
    public function getDeltaLogPath()
    {
        return $this->delta_log_path;
    }

    /**
     * Generated from protobuf field <code>string delta_log_path = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDeltaLogPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->delta_log_path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 delta_log_size = 5;</code>
     * @return int|string
     */
    public function getDeltaLogSize()
    {
        return $this->delta_log_size;
    }

    /**
     * Generated from protobuf field <code>int64 delta_log_size = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDeltaLogSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->delta_log_size = $var;

        return $this;
    }

}

