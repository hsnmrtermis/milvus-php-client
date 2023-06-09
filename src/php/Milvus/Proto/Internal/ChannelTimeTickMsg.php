<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: internal.proto

namespace Milvus\Proto\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.internal.ChannelTimeTickMsg</code>
 */
class ChannelTimeTickMsg extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.common.MsgBase base = 1;</code>
     */
    protected $base = null;
    /**
     * Generated from protobuf field <code>repeated string channelNames = 2;</code>
     */
    private $channelNames;
    /**
     * Generated from protobuf field <code>repeated uint64 timestamps = 3;</code>
     */
    private $timestamps;
    /**
     * Generated from protobuf field <code>uint64 default_timestamp = 4;</code>
     */
    protected $default_timestamp = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Common\MsgBase $base
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $channelNames
     *     @type array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $timestamps
     *     @type int|string $default_timestamp
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
     * Generated from protobuf field <code>repeated string channelNames = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getChannelNames()
    {
        return $this->channelNames;
    }

    /**
     * Generated from protobuf field <code>repeated string channelNames = 2;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setChannelNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->channelNames = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 timestamps = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTimestamps()
    {
        return $this->timestamps;
    }

    /**
     * Generated from protobuf field <code>repeated uint64 timestamps = 3;</code>
     * @param array<int>|array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTimestamps($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::UINT64);
        $this->timestamps = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 default_timestamp = 4;</code>
     * @return int|string
     */
    public function getDefaultTimestamp()
    {
        return $this->default_timestamp;
    }

    /**
     * Generated from protobuf field <code>uint64 default_timestamp = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDefaultTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->default_timestamp = $var;

        return $this;
    }

}

