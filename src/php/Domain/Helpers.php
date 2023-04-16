<?php

namespace Domain;

use Milvus\Proto\Schema\BoolArray;
use Milvus\Proto\Schema\DataType;
use Milvus\Proto\Schema\DoubleArray;
use Milvus\Proto\Schema\FloatArray;
use Milvus\Proto\Schema\IDs;
use Milvus\Proto\Schema\IntArray;
use Milvus\Proto\Schema\StringArray;

class Helpers
{
    public static function GetIds(IDs $ids): array
    {
        $idsList = [];
        if ($ids->hasIntId()) {
            foreach ($ids->getIntId()->getData() as $id) {
                $idsList[] = $id;
            }
        }
        if ($ids->hasStrId()) {
            foreach ($ids->getStrId()->getData() as $id) {
                $idsList[] = $id;
            }
        }
        return $idsList;
    }

    public static function getFieldDataClass(int $key)
    {
        $fields = [
            DataType::VarChar => ['class' =>StringArray::class, 'method' => 'setStringData'],
            DataType::Int64 => ['class' => IntArray::class, 'method' => 'setIntData' ],
            DataType::Float => ['class' => FloatArray::class, 'method' => 'setFloatData'],
            DataType::Bool => ['class' => BoolArray::class, 'method' => 'setBoolData'],
            DataType::Double => ['class' => DoubleArray::class, 'method' => 'setDoubleData'],
            DataType::Int8 => ['class' => IntArray::class, 'method' => 'setIntData'],
            DataType::Int16 => ['class' => IntArray::class, 'method' => 'setIntData'],
            DataType::Int32 => ['class' => IntArray::class, 'method' => 'setIntData'],
            DataType::String => ['class' =>StringArray::class, 'method' => 'setStringData'],
            DataType::None => null
        ];
        if (isset($fields[$key])){
            return $fields[$key];
        }
        return null;
    }

    public static function guidv4($data = null) {
        // Generate 16 bytes (128 bits) of random data or use the data passed into the function.
        $data = $data ?? random_bytes(16);
        assert(strlen($data) == 16);

        // Set version to 0100
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40);
        // Set bits 6-7 to 10
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80);

        // Output the 36 character UUID.
        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }


}