<?php

namespace App\Manager;

use DonkeyFive\Manager\AbstractManager;
use App\Entity\Field;
use App\Manager\OptionManager;

class FieldManager extends AbstractManager {

    public array $dataVerifs = ['fieldName', 'fieldTarifHourHT', 'fieldTarifDayHT', 'fieldDescription', 'fieldPicture', 'centerId'];
    public array $fieldDatas = [];

    public function findAll() {
        return $this->readMany(Field::class);
    }

    public function findFieldByCenterId($id) {
        return $this->readMany(Field::class, ['center_id' => $id]);
    }

    public function findFieldById() {
        return $this->readOne(Field::class, ['fieldId' => $_GET['id']]);
    }

    public function getAllFielsByCenterId(int $id) {
        return $this->readManyByQueryPersoAndParam(Field::class, $this->getAllQuerys()['allFieldByCenterId'], [':centerId' => $id]);
    }

    public function addfield(){
        $fileds = $this->findAll();
        $arrayError = [];
        foreach($fileds as $value){
            if($value->getFieldName() === $_POST['fieldName']){
                $arrryError[] = 'Field already exist';
                return $arrryError;
            }
        }
        foreach($this->dataVerifs as $data){
            if(isset($_POST[$data])){
                $this->fieldDatas[$data] = $_POST[$data];
            }
            $arrayError[$data] = $data.' is empty';
        }
        if(!empty($arrayError)){
            return $arrayError;
        }
        if(!empty($_FILES)){
            $fieldPicture = $this->addPicture(Field::class);
            $this->fieldDatas['fieldPicture'] = $fieldPicture;
            if($this->create(Field::class, $this->fieldDatas)){
                $fieldId = $this->lastInsertId();
                $optionManager = new OptionManager();
                $options = $optionManager->findAll();
                $filedOptionManager = new FieldOptionManager();
                foreach($options as $option){
                    $filedOptionManager->add(['fieldId' => $fieldId, 'optionId' => $option->getOptionId()]);
                }
                return true;
            }
        }
        $arrayError['fieldPicture'] = 'fieldPicture is empty';
        return $arrayError;
    }

    public function editFieldInfo(){
        $field = $this->findFieldById();
        $arrayError = [];
        foreach($this->dataVerifs as $data){
            if(isset($_POST[$data])){
                $this->fieldDatas[$data] = $_POST[$data];
            }
        }
        if(!empty($arrayError)){
            return $arrayError;
        }
        if(!empty($_FILES)){
            $fieldPicture = $this->addPicture(Field::class);
            $this->fieldDatas['fieldPicture'] = $fieldPicture;
            if($this->update(Field::class, $this->fieldDatas, ['fieldId' => $field->getFieldId()])){
                return true;
            }
        }
        if($this->update(Field::class, $this->fieldDatas, ['fieldId' => $field->getFieldId()])){
            return true;
        }
        $arrayError['fieldPicture'] = 'fieldPicture is empty';
        return $arrayError;
    }

    public function editFieldPicture(){
        $field = $this->findFieldById();
        $arrayError = [];
        if(!empty($_FILES)){
            $fieldPicture = $this->updatePicture(Field::class, ['fieldId' => $field->getFieldId()]);
            $this->fieldDatas['fieldPicture'] = $fieldPicture;
            if($this->update(Field::class, $this->fieldDatas, ['fieldId' => $field->getFieldId()])){
                return true;
            }
        }
        $arrayError['fieldPicture'] = 'fieldPicture is empty';
        return $arrayError;
    }

    public function deleteField(){
        $field = $this->findFieldById();
        if($this->delete(Field::class, ['fieldId' => $field->getFieldId()])){
            return true;
        }
        return false;
    }




}