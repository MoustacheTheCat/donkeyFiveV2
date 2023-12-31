<?php

namespace App\Entity;

class Option {
    public ?int $optionId;
    public ?string $optionName;
    public ?float $optionCostHT;
    public ?string $optionDescription;
    public ?string $optionPicture;
    public ?string $createdAt;
    public ?string $updatedAt;

    public function getOptionId(): ?int
    {
        return $this->optionId;
    }

    public function setOptionId(?int $optionId): self
    {
        $this->optionId = $optionId;
        return $this;
    }

    public function getOptionName(): ?string
    {
        return $this->optionName;
    }

    public function setOptionName(?string $optionName): self
    {
        $this->optionName = $optionName;
        return $this;
    }

    public function getOptionDescription(): ?string
    {
        return $this->optionDescription;
    }

    public function setOptionDescription(?string $optionDescription): self
    {
        $this->optionDescription = $optionDescription;
        return $this;
    }

    public function getOptionPicture(): ?string
    {
        return $this->optionPicture;
    }

    public function setOptionPicture(?string $optionPicture): self
    {
        $this->optionPicture = $optionPicture;
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

    public function getOptionCostHT(): ?float
    {
        return $this->optionCostHT;
    }

    public function setOptionCostHT(?float $optionCostHT): self
    {
        $this->optionCostHT = $optionCostHT;
        return $this;
    }
}