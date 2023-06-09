<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

namespace Milvus\Proto\Schema;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 **
 * &#64;brief Field schema
 *
 * Generated from protobuf message <code>milvus.proto.schema.FieldSchema</code>
 */
class FieldSchema extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 fieldID = 1;</code>
     */
    protected $fieldID = 0;
    /**
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>bool is_primary_key = 3;</code>
     */
    protected $is_primary_key = false;
    /**
     * Generated from protobuf field <code>string description = 4;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>.milvus.proto.schema.DataType data_type = 5;</code>
     */
    protected $data_type = 0;
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyValuePair type_params = 6;</code>
     */
    private $type_params;
    /**
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyValuePair index_params = 7;</code>
     */
    private $index_params;
    /**
     * Generated from protobuf field <code>bool autoID = 8;</code>
     */
    protected $autoID = false;
    /**
     * To keep compatible with older version, the default state is `Created`.
     *
     * Generated from protobuf field <code>.milvus.proto.schema.FieldState state = 9;</code>
     */
    protected $state = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $fieldID
     *     @type string $name
     *     @type bool $is_primary_key
     *     @type string $description
     *     @type int $data_type
     *     @type array<\Milvus\Proto\Common\KeyValuePair>|\Google\Protobuf\Internal\RepeatedField $type_params
     *     @type array<\Milvus\Proto\Common\KeyValuePair>|\Google\Protobuf\Internal\RepeatedField $index_params
     *     @type bool $autoID
     *     @type int $state
     *           To keep compatible with older version, the default state is `Created`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Schema::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 fieldID = 1;</code>
     * @return int|string
     */
    public function getFieldID()
    {
        return $this->fieldID;
    }

    /**
     * Generated from protobuf field <code>int64 fieldID = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFieldID($var)
    {
        GPBUtil::checkInt64($var);
        $this->fieldID = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_primary_key = 3;</code>
     * @return bool
     */
    public function getIsPrimaryKey()
    {
        return $this->is_primary_key;
    }

    /**
     * Generated from protobuf field <code>bool is_primary_key = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsPrimaryKey($var)
    {
        GPBUtil::checkBool($var);
        $this->is_primary_key = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 4;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.schema.DataType data_type = 5;</code>
     * @return int
     */
    public function getDataType()
    {
        return $this->data_type;
    }

    /**
     * Generated from protobuf field <code>.milvus.proto.schema.DataType data_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDataType($var)
    {
        GPBUtil::checkEnum($var, \Milvus\Proto\Schema\DataType::class);
        $this->data_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyValuePair type_params = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTypeParams()
    {
        return $this->type_params;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyValuePair type_params = 6;</code>
     * @param array<\Milvus\Proto\Common\KeyValuePair>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTypeParams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Common\KeyValuePair::class);
        $this->type_params = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyValuePair index_params = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIndexParams()
    {
        return $this->index_params;
    }

    /**
     * Generated from protobuf field <code>repeated .milvus.proto.common.KeyValuePair index_params = 7;</code>
     * @param array<\Milvus\Proto\Common\KeyValuePair>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIndexParams($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Milvus\Proto\Common\KeyValuePair::class);
        $this->index_params = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool autoID = 8;</code>
     * @return bool
     */
    public function getAutoID()
    {
        return $this->autoID;
    }

    /**
     * Generated from protobuf field <code>bool autoID = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoID($var)
    {
        GPBUtil::checkBool($var);
        $this->autoID = $var;

        return $this;
    }

    /**
     * To keep compatible with older version, the default state is `Created`.
     *
     * Generated from protobuf field <code>.milvus.proto.schema.FieldState state = 9;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * To keep compatible with older version, the default state is `Created`.
     *
     * Generated from protobuf field <code>.milvus.proto.schema.FieldState state = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Milvus\Proto\Schema\FieldState::class);
        $this->state = $var;

        return $this;
    }

}

