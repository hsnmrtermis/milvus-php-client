<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: feder.proto

namespace Milvus\Proto\Feder;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.feder.FederSegmentSearchResult</code>
 */
class FederSegmentSearchResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 segmentID = 1;</code>
     */
    protected $segmentID = 0;
    /**
     * Generated from protobuf field <code>string visit_info = 2;</code>
     */
    protected $visit_info = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $segmentID
     *     @type string $visit_info
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
     * Generated from protobuf field <code>string visit_info = 2;</code>
     * @return string
     */
    public function getVisitInfo()
    {
        return $this->visit_info;
    }

    /**
     * Generated from protobuf field <code>string visit_info = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVisitInfo($var)
    {
        GPBUtil::checkString($var, True);
        $this->visit_info = $var;

        return $this;
    }

}

