<?php

namespace App\Manager; 
use DonkeyFive\Manager\AbstractManager;
use App\Entity\Home;
use App\Entity\Center;

class HomeManager extends AbstractManager {

    public function getAllCenterCity(){
        return $this->readManyByQueryPerso(Center::class, $this->getQuerys()['allCenterCity']);
    }

    public function getAllCards(){
        $home = new Home;
        return $home->getAllHomeCards();
    }

    public function getCardByname(string $cardName){
        $home = new Home();
        return $home->getOneHomeCard($cardName);
    }

}
