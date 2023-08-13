<?php

namespace Hasanmertermis\MilvusPhpClient\Domain\Schema;



class Field
{
    /**
     * @var string
     */
    private string $fieldName;
    /**
     * @var array|string|int
     */
    private $fieldData;
    /**
     * @var int
     */
    private int $fieldType;
    /**
     * @var int
     */
    private ?int $dim = null;
    /**
     * @var int
     */
    private ?int $maxLength = null;

    /**
     * @var string
     * Only Search Request Required
     */
    private string $metricType;


    /**
     * @var bool
     */
    private bool $isPrimaryField = false;

    /**
     * @param array $data
     */
    public function __construct(array $data= [])
    {
        if (count($data)){
            $this->define($data);
        }
    }

    /**
     * @param $data
     * @return void
     */
    public function define($data){
        if (!isset($data['fieldName']) || !isset($data['fieldData']) || !isset($data['fieldType'])){
            throw new \Exception('Field içinde fieldName, fieldData ve fieldType alanlarının gönderilmesi zorunlu.');
        }
        $this->fieldName = $data['fieldName'];
        $this->fieldData = $data['fieldData'];
        $this->fieldType = $data['fieldType'];
    }

    /**
     * @return string
     */
    public function getFieldName(): string
    {
        return $this->fieldName;
    }

    /**
     * @param mixed $fieldName
     */
    public function setFieldName($fieldName): Field
    {
        $this->fieldName = $fieldName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFieldData()
    {
        return $this->fieldData;
    }

    /**
     * @return string
     */
    public function getMetricType(): string
    {
        return $this->metricType;
    }

    /**
     * @param string $metricType
     */
    public function setMetricType(string $metricType): Field
    {
        $this->metricType = $metricType;
        return $this;
    }

    /**
     * @param mixed $fieldData
     */
    public function setFieldData($fieldData): Field
    {
        $this->fieldData = $fieldData;
        return $this;
    }

    /**
     * @return int
     */
    public function getFieldType(): int
    {
        return $this->fieldType;
    }

    /**
     * @param mixed $fieldType
     */
    public function setFieldType($fieldType): Field
    {
        $this->fieldType = $fieldType;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPrimaryField(): bool
    {
        return $this->isPrimaryField;
    }

    /**
     * @param bool $isPrimaryField
     */
    public function setIsPrimaryField(bool $isPrimaryField): Field
    {
        $this->isPrimaryField = $isPrimaryField;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getDim(): ?int
    {
        return $this->dim;
    }

    /**
     * @param int|null $dim
     */
    public function setDim(?int $dim): Field
    {
        $this->dim = $dim;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxLength(): ?int
    {
        return $this->maxLength;
    }

    /**
     * @param int|null $maxLength
     */
    public function setMaxLength(?int $maxLength): Field
    {
        $this->maxLength = $maxLength;
        return $this;
    }

}