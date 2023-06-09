<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: data_coord.proto

namespace Milvus\Proto\Data;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.data.Binlog</code>
 */
class Binlog extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 entries_num = 1;</code>
     */
    protected $entries_num = 0;
    /**
     * Generated from protobuf field <code>uint64 timestamp_from = 2;</code>
     */
    protected $timestamp_from = 0;
    /**
     * Generated from protobuf field <code>uint64 timestamp_to = 3;</code>
     */
    protected $timestamp_to = 0;
    /**
     * deprecated
     *
     * Generated from protobuf field <code>string log_path = 4;</code>
     */
    protected $log_path = '';
    /**
     * Generated from protobuf field <code>int64 log_size = 5;</code>
     */
    protected $log_size = 0;
    /**
     * Generated from protobuf field <code>int64 logID = 6;</code>
     */
    protected $logID = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $entries_num
     *     @type int|string $timestamp_from
     *     @type int|string $timestamp_to
     *     @type string $log_path
     *           deprecated
     *     @type int|string $log_size
     *     @type int|string $logID
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\DataCoord::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 entries_num = 1;</code>
     * @return int|string
     */
    public function getEntriesNum()
    {
        return $this->entries_num;
    }

    /**
     * Generated from protobuf field <code>int64 entries_num = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEntriesNum($var)
    {
        GPBUtil::checkInt64($var);
        $this->entries_num = $var;

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
     * deprecated
     *
     * Generated from protobuf field <code>string log_path = 4;</code>
     * @return string
     */
    public function getLogPath()
    {
        return $this->log_path;
    }

    /**
     * deprecated
     *
     * Generated from protobuf field <code>string log_path = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLogPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->log_path = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 log_size = 5;</code>
     * @return int|string
     */
    public function getLogSize()
    {
        return $this->log_size;
    }

    /**
     * Generated from protobuf field <code>int64 log_size = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLogSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->log_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 logID = 6;</code>
     * @return int|string
     */
    public function getLogID()
    {
        return $this->logID;
    }

    /**
     * Generated from protobuf field <code>int64 logID = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLogID($var)
    {
        GPBUtil::checkInt64($var);
        $this->logID = $var;

        return $this;
    }

}

