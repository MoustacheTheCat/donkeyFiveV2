<?php

namespace App\Manager;

use DonkeyFive\Manager\AbstractManager;
use App\Entity\Field;


class FilterManager extends AbstractManager  {

    
    public function getAllFielsAndRentalsByCenterByIdint(int $id){
        return $this->readManyByQueryPersoAndParam(Field::class, $this->getQuerys()['allFieldByCenterId'], [ ':centerId' => $id ]);
    }
}