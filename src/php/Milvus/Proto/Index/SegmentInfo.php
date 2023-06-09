<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: index_coord.proto

namespace Milvus\Proto\Index;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.index.SegmentInfo</code>
 */
class SegmentInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 collectionID = 1;</code>
     */
    protected $collectionID = 0;
    /**
     * Generated from protobuf field <code>int64 segmentID = 2;</code>
     */
    protected $segmentID = 0;
    /**
     * Generated from protobuf field <code>bool enable_index = 3;</code>
     */
    protected $enable_index = false;
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.index.IndexFilePathInfo index_infos = 4;</code>
     */
    private $index_infos;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $collectionID
     *     @type int|string $segmentID
     *     @type bool $enable_index
     *     @type array<\Milvus\Proto\Index\IndexFilePathInfo>|\Google\Protobuf\Internal\RepeatedField $index_infos
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\IndexCoord::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 collectionID = 1;</code>
     * @return int|string
     */
    public function getCollectionID()
    {
        return $this->collectionID;
    }

    /**
     * Generated from protobuf field <code>int64 collectionID = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCollectionID($var)
    {
        GPBUtil::checkInt64($var);
        $this->collectionID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 segmentID = 2;</code>
     * @return int|string
     */
    public function getSegmentID()
    {
        return $this->segmentID;
    }

    /**
     * Generated from protobuf field <code>int64 segmentID = 2;</code>
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
     * Generated from protobuf field <code>bool enable_index = 3;</code>
     * @return bool
     */
    public function getEnableIndex()
    {
        return $this->enable_index;
    }

    /**
     * Generated from protobuf field <code>bool enable_index = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableIndex($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_index = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.index.IndexFilePathInfo index_infos = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIndexInfos()
    {
        return $this->index_infos;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.index.IndexFilePathInfo index_infos = 4;</code>
     * @param array<\Milvus\Proto\Index\IndexFilePathInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIndexInfos($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Index\IndexFilePathInfo::class);
        $this->index_infos = $arr;

        return $this;
    }

}

