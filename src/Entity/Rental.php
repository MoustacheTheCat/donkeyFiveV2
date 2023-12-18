<?php

namespace App\Entity;

class Rental {
    public ?int $rentalId;
    public ?int $rentalNumber;
    public ?int $userId;
    public ?int $fieldId;
    public ?int $rentalCostOfTVA;
    public ?string $rentalStatus;
    public ?array $rentalDataOptions;
    public ?array $rentalDataTimes;
    public ?float $rentalTotalHT;
    public ?float $rentalTotalTTC;
    public ?string $createdAt;
    public ?string $updatedAt;


    public function getRentalId(): ?int
    {
        return $this->rentalId;
    }

    public function getRentalNumber(): ?int
    {
        return $this->rentalNumber;
    }

    public function setRentalNumber(?int $rentalNumber): self
    {
        $this->rentalNumber = $rentalNumber;
        return $this;
    }

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    public function setUserId(?int $userId): self
    {
        $this->userId = $userId;
        return $this;
    }

    public function getFieldId(): ?int
    {
        return $this->fieldId;
    }

    public function setFieldId(?int $fieldId): self
    {
        $this->fieldId = $fieldId;
        return $this;
    }

    public function getRentalCostOfTVA(): ?int
    {
        return $this->rentalCostOfTVA;
    }

    public function setRentalCostOfTVA(?int $rentalCostOfTVA): self
    {
        $this->rentalCostOfTVA = $rentalCostOfTVA;
        return $this;
    }

    public function getRentalStatus(): ?string
    {
        return $this->rentalStatus;
    }

    public function setRentalStatus(?string $rentalStatus): self
    {
        $this->rentalStatus = $rentalStatus;
        return $this;
    }

    public function getRentalDataOptions(): ?array
    {
        return $this->rentalDataOptions;
    }

    public function setRentalDataOptions(?array $rentalDataOptions): self
    {
        $this->rentalDataOptions = $rentalDataOptions;
        return $this;
    }

    public function getRentalDataTimes(): ?array
    {
        return $this->rentalDataTimes;
    }

    public function setRentalDataTimes(?array $rentalDataTimes): self
    {
        $this->rentalDataTimes = $rentalDataTimes;
        return $this;
    }

    public function getRentalTotalHT(): ?float
    {
        return $this->rentalTotalHT;
    }

    public function setRentalTotalHT(?float $rentalTotalHT): self
    {
        $this->rentalTotalHT = $rentalTotalHT;
        return $this;
    }

    public function getRentalTotalTTC(): ?float
    {
        return $this->rentalTotalTTC;
    }

    public function setRentalTotalTTC(?float $rentalTotalTTC): self
    {
        $this->rentalTotalTTC = $rentalTotalTTC;
        return $this;
    }


    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

}




