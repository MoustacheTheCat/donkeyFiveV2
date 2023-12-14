<?php

namespace App\Manager;

use DonkeyFive\Manager\AbstractManager;
use App\Entity\Center;

class CenterManager extends  AbstractManager{
    
    public function findAll() {
		return $this->readMany(Center::class);
	}
}