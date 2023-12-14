<?php

namespace App\Entity;

class User {
    private ?int $userId;
    private ?string $userFirstName;
    private ?string $userLastName;
    private ?string $userEmail;
    private ?string $userPassword;
    private ?int $userNumber;
    private ?string $userAddress;
    private ?int $userZip;
    private ?string $userCity;
    private ?string $userCountry;
    private ?string $userBirthDay;
    private ?string $userPicture;
    private ?string $createdAt;
    private ?string $updatedAt;
    

    public function getUserId(): ?int
    {
        return $this->userId;
    }

    
    public function getUserFirstName(): ?string
    {
        return $this->userFirstName;
    }

    public function getUserLastName(): ?string
    {
        return $this->userLastName;
    }

    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    public function getUserPassword(): ?string
    {
        return $this->userPassword;
    }

    public function getUserNumber(): ?int
    {
        return $this->userNumber;
    }

    public function getUserAddress(): ?string
    {
        return $this->userAddress;
    }

    public function getUserZip(): ?int
    {
        return $this->userZip;
    }

    public function getUserCity(): ?string
    {
        return $this->userCity;
    }

    public function getUserCountry(): ?string
    {
        return $this->userCountry;
    }

    public function getUserBirthDay(): ?string
    {
        return $this->userBirthDay;
    }

    public function getUserPicture(): ?string
    {
        return $this->userPicture;
    }

    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    public function getUpdatedAt(): ?string
    {
        return $this->updatedAt;
    }

    public function setUserFirstName(?string $userFirstName): self
    {
        $this->userFirstName = $userFirstName;
        return $this;
    }

    public function setUserLastName(?string $userLastName): self
    {
        $this->userLastName = $userLastName;
        return $this;
    }

    public function setUserEmail(?string $userEmail): self
    {
        $this->userEmail = $userEmail;
        return $this;
    }

    public function setUserPassword(?string $userPassword): self
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    public function setUserNumber(?int $userNumber): self
    {
        $this->userNumber = $userNumber;
        return $this;
    }

    public function setUserAddress(?string $userAddress): self
    {
        $this->userAddress = $userAddress;
        return $this;
    }

    public function setUserZip(?int $userZip): self
    {
        $this->userZip = $userZip;
        return $this;
    }

    public function setUserCity(?string $userCity): self
    {
        $this->userCity = $userCity;
        return $this;
    }

    public function setUserCountry(?string $userCountry): self
    {
        $this->userCountry = $userCountry;
        return $this;
    }

    public function setUserBirthDay(?string $userBirthDay): self
    {
        $this->userBirthDay = $userBirthDay;
        return $this;
    }

    public function setUserpicture(?string $userPicture): self
    {
        $this->userPicture = $userPicture;
        return $this;
    }

    
}