<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: schema.proto

namespace GPBMetadata;

class Schema
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
schema.protomilvus.proto.schema"�
FieldSchema
fieldID (
name (	
is_primary_key (
description (	0
	data_type (2.milvus.proto.schema.DataType6
type_params (2!.milvus.proto.common.KeyValuePair7
index_params (2!.milvus.proto.common.KeyValuePair
autoID (.
state	 (2.milvus.proto.schema.FieldState"w
CollectionSchema
name (	
description (	
autoID (0
fields (2 .milvus.proto.schema.FieldSchema"
	BoolArray
data ("
IntArray
data ("
	LongArray
data ("

FloatArray
data ("
DoubleArray
data ("

BytesArray
data ("
StringArray
data (	"�
ScalarField3
	bool_data (2.milvus.proto.schema.BoolArrayH 1
int_data (2.milvus.proto.schema.IntArrayH 3
	long_data (2.milvus.proto.schema.LongArrayH 5

float_data (2.milvus.proto.schema.FloatArrayH 7
double_data (2 .milvus.proto.schema.DoubleArrayH 7
string_data (2 .milvus.proto.schema.StringArrayH 5

bytes_data (2.milvus.proto.schema.BytesArrayH B
data"t
VectorField
dim (7
float_vector (2.milvus.proto.schema.FloatArrayH 
binary_vector (H B
data"�
	FieldData+
type (2.milvus.proto.schema.DataType

field_name (	3
scalars (2 .milvus.proto.schema.ScalarFieldH 3
vectors (2 .milvus.proto.schema.VectorFieldH 
field_id (B
field"w
IDs0
int_id (2.milvus.proto.schema.LongArrayH 2
str_id (2 .milvus.proto.schema.StringArrayH B

id_field"�
SearchResultData
num_queries (
top_k (3
fields_data (2.milvus.proto.schema.FieldData
scores (%
ids (2.milvus.proto.schema.IDs
topks (*�
DataType
None 
Bool
Int8	
Int16	
Int32	
Int64	
Float


Double

String
VarChar
BinaryVectord
FloatVectore*V

FieldState
FieldCreated 
FieldCreating
FieldDropping
FieldDroppedBf
io.milvus.grpcBSchemaProtoPZ1github.com/milvus-io/milvus-proto/go-api/schemapb��IO.Milvus.Grpcbproto3'
        , true);

        static::$is_initialized = true;
    }
}

