<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plan.proto

namespace Milvus\Proto\Plan;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.plan.VectorANNS</code>
 */
class VectorANNS extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool is_binary = 1;</code>
     */
    protected $is_binary = false;
    /**
     * Generated from protobuf field <code>int64 field_id = 2;</code>
     */
    protected $field_id = 0;
    /**
     * Generated from protobuf field <code>.milvus.proto.plan.Expr predicates = 3;</code>
     */
    protected $predicates = null;
    /**
     * Generated from protobuf field <code>.milvus.proto.plan.QueryInfo query_info = 4;</code>
     */
    protected $query_info = null;
    /**
     * always be "$0"
     *
     * Generated from protobuf field <code>string placeholder_tag = 5;</code>
     */
    protected $placeholder_tag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_binary
     *     @type int|string $field_id
     *     @type \Milvus\Proto\Plan\Expr $predicates
     *     @type \Milvus\Proto\Plan\QueryInfo $query_info
     *     @type string $placeholder_tag
     *           always be "$0"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Plan::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool is_binary = 1;</code>
     * @return bool
     */
    public function getIsBinary()
    {
        return $this->is_binary;
    }

    /**
     * Generated from protobuf field <code>bool is_binary = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsBinary($var)
    {
        GPBUtil::checkBool($var);
        $this->is_binary = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 field_id = 2;</code>
     * @return int|string
     */
    public function getFieldId()
    {
        return $this->field_id;
    }

    /**
     * Generated from protobuf field <code>int64 field_id = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFieldId($var)
    {
        GPBUtil::checkInt64($var);
        $this->field_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.Expr predicates = 3;</code>
     * @return \Milvus\Proto\Plan\Expr|null
     */
    public function getPredicates()
    {
        return $this->predicates;
    }

    public function hasPredicates()
    {
        return isset($this->predicates);
    }

    public function clearPredicates()
    {
        unset($this->predicates);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.Expr predicates = 3;</code>
     * @param \Milvus\Proto\Plan\Expr $var
     * @return $this
     */
    public function setPredicates($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Plan\Expr::class);
        $this->predicates = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.QueryInfo query_info = 4;</code>
     * @return \Milvus\Proto\Plan\QueryInfo|null
     */
    public function getQueryInfo()
    {
        return $this->query_info;
    }

    public function hasQueryInfo()
    {
        return isset($this->query_info);
    }

    public function clearQueryInfo()
    {
        unset($this->query_info);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.QueryInfo query_info = 4;</code>
     * @param \Milvus\Proto\Plan\QueryInfo $var
     * @return $this
     */
    public function setQueryInfo($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Plan\QueryInfo::class);
        $this->query_info = $var;

        return $this;
    }

    /**
     * always be "$0"
     *
     * Generated from protobuf field <code>string placeholder_tag = 5;</code>
     * @return string
     */
    public function getPlaceholderTag()
    {
        return $this->placeholder_tag;
    }

    /**
     * always be "$0"
     *
     * Generated from protobuf field <code>string placeholder_tag = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPlaceholderTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->placeholder_tag = $var;

        return $this;
    }

}

