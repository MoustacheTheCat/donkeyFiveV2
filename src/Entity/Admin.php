<?php

namespace App\Entity;

class Admin {
    private ?int $adminId;
    private ?string $adminFirstName;
    private ?string $adminLastName;
    private ?string $adminEmail;
    private ?int $adminNumber;
    private ?string $adminPassword;
    private ?string $adminPicture;
    private ?string $createdAt;
    private ?string $updatedAt;
    

    public function getAdminId(): ?int
    {
        return $this->adminId;
    }

    
    public function getAdminFirstName(): ?string
    {
        return $this->adminFirstName;
    }

    public function getAdminLastName(): ?string
    {
        return $this->adminLastName;
    }

    public function getAdminEmail(): ?string
    {
        return $this->adminEmail;
    }

    public function getAdminNumber(): ?int
    {
        return $this->adminNumber;
    }

    public function getAdminPassword(): ?string
    {
        return $this->adminPassword;
    }

    public function getAdminPicture(): ?string
    {
        return $this->adminPicture;
    }

    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    public function setAdminId(int $adminId): self
    {
        $this->adminId = $adminId;

        return $this;
    }

    public function setAdminFirstName(string $adminFirstName): self
    {
        $this->adminFirstName = $adminFirstName;

        return $this;
    }

    public function setAdminLastName(string $adminLastName): self
    {
        $this->adminLastName = $adminLastName;

        return $this;
    }

    public function setAdminEmail(string $adminEmail): self
    {
        $this->adminEmail = $adminEmail;

        return $this;
    }

    public function setAdminNumber(int $adminNumber): self
    {
        $this->adminNumber = $adminNumber;

        return $this;
    }

    public function setAdminPassword(string $adminPassword): self
    {
        $this->adminPassword = $adminPassword;

        return $this;
    }

    public function setAdminPicture(string $adminPicture): self
    {
        $this->adminPicture = $adminPicture;

        return $this;
    }

    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function setUpdatedAt(string $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }
}