<?php

namespace App\Manager; 
use DonkeyFive\Manager\AbstractManager;
use App\Entity\HomeCard;


class HomeCardManager extends AbstractManager {

    
    public function getAllCards(){
        return $this->getAllHomeCards();
    }

    public function getCardByname(string $cardName){
        return $this->getAllHomeCards()[$cardName];
    }

}