<?php

namespace App\Entity;

class FieldOption
{
    private ?int $optionId;
    private ?int $fieldId;
    private ?string $createdAt;
    private ?string $updatedAt;

    
    public function getOptionId()
    {
        return $this->centerId;
    }

    public function getFieldId()
    {
        return $this->fieldId;
    }

    public function setOptionId($optionId)
    {
        $this->optionId = $optionId;
        return $this;
    }   

    public function setFieldId($fieldId)
    {
        $this->fieldId = $fieldId;
        return $this;
    }

}