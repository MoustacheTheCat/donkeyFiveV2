<?php

namespace App\Entity;




class HomeCard {

    private ?string $cardName;
    
    public function getCardName(): ?string
    {
        return $this->cardName;
    }

    public function setCardName(?string $cardName): self
    {
        $this->cardName = $cardName;
        return $this;
    }
}