<?php

namespace App\Manager;

use DonkeyFive\Manager\AbstractManager;
use App\Entity\FieldOption;

class FieldOptionManager extends  AbstractManager{
    public function add($datas){
        $this->create(FieldOption::class, $datas);
    }
}