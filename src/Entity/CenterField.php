<?php

namespace App\Entity;

class CenterFields
{
    private ?int $centerId;
    private ?int $fieldId;
    private ?string $createdAt;
    private ?string $updatedAt;

    
    public function getCenterId()
    {
        return $this->centerId;
    }

    public function getFieldId()
    {
        return $this->fieldId;
    }

    public function setCenterId($centerId)
    {
        $this->centerId = $centerId;
        return $this;
    }

    public function setFieldId($fieldId)
    {
        $this->fieldId = $fieldId;
        return $this;
    }
    

}