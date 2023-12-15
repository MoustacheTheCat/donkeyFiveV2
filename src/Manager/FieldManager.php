<?php

namespace App\Manager;

use DonkeyFive\Manager\AbstractManager;
use App\Entity\Field;

class FieldManager extends AbstractManager {

    public function findAll() {
        return $this->readMany(Field::class);
    }

    public function findFieldByCenterId($id) {
        return $this->readMany(Field::class, ['center_id' => $id]);
    }

    public function findFieldById() {
        return $this->readOne(Field::class, ['fieldId' => $_GET['id']]);
    }

    public function getAllFielsByCenterId(int $id){
        return $this->readManyByQueryPersoAndParam(Field::class, $this->getQuerys()['allFieldByCenterId'], [ ':centerId' => $id ]);
    }
}