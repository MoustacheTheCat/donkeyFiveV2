<?php

namespace App\Entity;

class CenterFields
{
    private ?int $centerId;
    private ?int $fieldId;
    
    public function getCenterId()
    {
        return $this->centerId;
    }

    public function getFieldId()
    {
        return $this->fieldId;
    }

}