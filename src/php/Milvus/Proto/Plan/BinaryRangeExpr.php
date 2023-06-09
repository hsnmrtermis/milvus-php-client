<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: plan.proto

namespace Milvus\Proto\Plan;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>milvus.proto.plan.BinaryRangeExpr</code>
 */
class BinaryRangeExpr extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.milvus.proto.plan.ColumnInfo column_info = 1;</code>
     */
    protected $column_info = null;
    /**
     * Generated from protobuf field <code>bool lower_inclusive = 2;</code>
     */
    protected $lower_inclusive = false;
    /**
     * Generated from protobuf field <code>bool upper_inclusive = 3;</code>
     */
    protected $upper_inclusive = false;
    /**
     * Generated from protobuf field <code>.milvus.proto.plan.GenericValue lower_value = 4;</code>
     */
    protected $lower_value = null;
    /**
     * Generated from protobuf field <code>.milvus.proto.plan.GenericValue upper_value = 5;</code>
     */
    protected $upper_value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Milvus\Proto\Plan\ColumnInfo $column_info
     *     @type bool $lower_inclusive
     *     @type bool $upper_inclusive
     *     @type \Milvus\Proto\Plan\GenericValue $lower_value
     *     @type \Milvus\Proto\Plan\GenericValue $upper_value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Plan::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.ColumnInfo column_info = 1;</code>
     * @return \Milvus\Proto\Plan\ColumnInfo|null
     */
    public function getColumnInfo()
    {
        return $this->column_info;
    }

    public function hasColumnInfo()
    {
        return isset($this->column_info);
    }

    public function clearColumnInfo()
    {
        unset($this->column_info);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.ColumnInfo column_info = 1;</code>
     * @param \Milvus\Proto\Plan\ColumnInfo $var
     * @return $this
     */
    public function setColumnInfo($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Plan\ColumnInfo::class);
        $this->column_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool lower_inclusive = 2;</code>
     * @return bool
     */
    public function getLowerInclusive()
    {
        return $this->lower_inclusive;
    }

    /**
     * Generated from protobuf field <code>bool lower_inclusive = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setLowerInclusive($var)
    {
        GPBUtil::checkBool($var);
        $this->lower_inclusive = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool upper_inclusive = 3;</code>
     * @return bool
     */
    public function getUpperInclusive()
    {
        return $this->upper_inclusive;
    }

    /**
     * Generated from protobuf field <code>bool upper_inclusive = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setUpperInclusive($var)
    {
        GPBUtil::checkBool($var);
        $this->upper_inclusive = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.GenericValue lower_value = 4;</code>
     * @return \Milvus\Proto\Plan\GenericValue|null
     */
    public function getLowerValue()
    {
        return $this->lower_value;
    }

    public function hasLowerValue()
    {
        return isset($this->lower_value);
    }

    public function clearLowerValue()
    {
        unset($this->lower_value);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.GenericValue lower_value = 4;</code>
     * @param \Milvus\Proto\Plan\GenericValue $var
     * @return $this
     */
    public function setLowerValue($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Plan\GenericValue::class);
        $this->lower_value = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.GenericValue upper_value = 5;</code>
     * @return \Milvus\Proto\Plan\GenericValue|null
     */
    public function getUpperValue()
    {
        return $this->upper_value;
    }

    public function hasUpperValue()
    {
        return isset($this->upper_value);
    }

    public function clearUpperValue()
    {
        unset($this->upper_value);
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.plan.GenericValue upper_value = 5;</code>
     * @param \Milvus\Proto\Plan\GenericValue $var
     * @return $this
     */
    public function setUpperValue($var)
    {
        GPBUtil::checkMessage($var, \Milvus\Proto\Plan\GenericValue::class);
        $this->upper_value = $var;

        return $this;
    }

}

