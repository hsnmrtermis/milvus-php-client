<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: feder.proto

namespace Milvus\Proto\Feder;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.feder.SegmentIndexData</code>
 */
class SegmentIndexData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 segmentID = 1;</code>
     */
    protected $segmentID = 0;
    /**
     * data from knownwhere
     *
     * Generated from protobuf field <code>string index_data = 2;</code>
     */
    protected $index_data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $segmentID
     *     @type string $index_data
     *           data from knownwhere
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Feder::initOnce();
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
     * data from knownwhere
     *
     * Generated from protobuf field <code>string index_data = 2;</code>
     * @return string
     */
    public function getIndexData()
    {
        return $this->index_data;
    }

    /**
     * data from knownwhere
     *
     * Generated from protobuf field <code>string index_data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIndexData($var)
    {
        GPBUtil::checkString($var, True);
        $this->index_data = $var;

        return $this;
    }

}

