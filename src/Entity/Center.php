<?php 

namespace App\Entity;

class Center {
    private ?int $centerId;
    private ?string $centerName;
    private ?string $centerCity;
    private ?string $centerAddress;
    private ?string $centerZip;
    private ?string $centerCountry;
    private ?string $centerNumber;
    private ?string $centerEmail;
    private ?string $centerInfo;
    private ?string $centerPicture;
    private ?string $centerDescription;
    private ?string $createdAt;
    private ?string $updatedAt;



    public function getCenterId(): ?int
    {
        return $this->centerId;
    }

    public function setCenterId(?int $centerId): self
    {
        $this->centerId = $centerId;
        return $this;
    }

    public function getCenterName(): ?string
    {
        return $this->centerName;
    }

    public function getCenterDescription(): ?string
    {
        return $this->centerDescription;
    }

    public function setCenterName(?string $centerName): self
    {
        $this->centerName = $centerName;
        return $this;
    }

    public function getCenterCity(): ?string
    {
        return $this->centerCity;
    }

    public function setCenterCity(?string $centerCity): self
    {
        $this->centerCity = $centerCity;
        return $this;
    }

    public function getCenterAddress(): ?string
    {
        return $this->centerAddress;
    }
    
    public function setCenterAddress(?string $centerAddress): self
    {
        $this->centerAddress = $centerAddress;
        return $this;
    }
    public function getCenterZip(): ?string
    {
        return $this->centerZip;
    }
    public function setCenterZip(?string $centerZip): self
    {
        $this->centerZip = $centerZip;
        return $this;
    }

    public function getCenterCountry(): ?string
    {
        return $this->centerCountry;
    }

    public function setCenterCountry(?string $centerCountry): self
    {
        $this->centerCountry = $centerCountry;
        return $this;
    }

    public function getCenterNumber(): ?string
    {
        return $this->centerNumber;
    }

    public function setCenterNumber(?string $centerNumber): self
    {
        $this->centerNumber = $centerNumber;
        return $this;
    }

    public function getCenterEmail(): ?string
    {
        return $this->centerEmail;
    }

    public function setCenterEmail(?string $centerEmail): self
    {
        $this->centerEmail = $centerEmail;
        return $this;
    }
    public function getCenterInfo(): ?string
    {
        return $this->centerInfo;
    }
    public function setCenterInfo(?string $centerInfo): self
    {
        $this->centerInfo = $centerInfo;
        return $this;
    }

    public function getCenterPicture(): ?string
    {
        return $this->centerPicture;
    }

    public function setCenterPicture(?string $centerPicture): self
    {
        $this->centerPicture = $centerPicture;
        return $this;
    }

    public function setCenterDescription(?string $centerDescription): ?string
    {
        $this->centerDescription = $centerDescription;
        return $this;
    }
}