<?php

namespace App\Entity;

require dirname(__DIR__, 2) . '/config/homecards.php';


class Home {

    public function __construct(
        private string $cardName = "",
        private array $homeCards = []
        )
    {
        $this->homeCards = HOMECARDS;
    }
    public function getAllHomeCards(){
        return $this->homeCards;
    }

    public function getOneHomeCard(string $cardName)
    {
        return $this->getAllHomeCards()[$cardName];
    }

}