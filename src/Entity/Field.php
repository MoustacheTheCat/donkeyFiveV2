<?php

namespace App\Entity;

class Field {
    private ?int $fieldId;
    private ?string $fieldName;
    private ?string $fieldTarifHourHT;
    private ?string $fieldTarifDayHT;
    private ?string $fieldDescription;
    private ?string $fieldPicture ;
    private ?int $centerId;


    public function getFieldId(): ?int
    {
        return $this->fieldId;
    }

    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }

    public function getFieldTarifHourHT(): ?string
    {
        return $this->fieldTarifHourHT;
    }

    public function getFieldTarifDayHT(): ?string
    {
        return $this->fieldTarifDayHT;
    }

    public function getFieldDescription(): ?string
    {
        return $this->fieldDescription;
    }

    public function getFieldPicture(): ?string
    {
        return $this->fieldPicture;
    }

    public function getCenterID(): ?int
    {
        return $this->centerId;
    }

    public function setFieldName(?string $fieldName): self
    {
        $this->fieldName = $fieldName;
        return $this;
    }

    public function setFieldTarifHourHT(?string $fieldTarifHourHT): self
    {
        $this->fieldTarifHourHT = $fieldTarifHourHT;
        return $this;
    }

    public function setFieldTarifDayHT(?string $fieldTarifDayHT): self
    {
        $this->fieldTarifDayHT = $fieldTarifDayHT;
        return $this;
    }

    public function setFieldDescription(?string $fieldDescription): self
    {
        $this->fieldDescription = $fieldDescription;
        return $this;
    }

    public function setFieldPicture(?string $fieldPicture): self
    {
        $this->fieldPicture = $fieldPicture;
        return $this;
    }

    public function setCenterId(?int $centerId): self
    {
        $this->centerId = $centerId;
        
    }
}