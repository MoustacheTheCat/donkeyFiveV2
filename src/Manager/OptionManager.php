<?php

namespace App\Manager;

use DonkeyFive\Manager\AbstractManager;
use App\Entity\Option;

class OptionManager extends  AbstractManager{

        public array $dataVerifs = ['optionName', 'optionCostHT', 'optionDescription'];
        public array $optionDatas = [];
        
        public function findAll() {
            return $this->readMany(Option::class);
        }

        public function findOptionById() {
            $id = intval($_GET['id']);
            return $this->readOne(Option::class, ['optionId' => $id]);
        }
    
        public function getAllOptionByFieldId(int $id){
            return $this->readManyByQueryPersoAndParam(Option::class, $this->getAllQuerys()['allOptionByFieldId'], [ ':fieldId' => $id ]);
        }

        public function addOption() {
            $option = $this->findAll();
            $arrayError = [];
            foreach($option as $value){
                if($value->getOptionName() === $_POST['optionName']){
                    $arrryError[] = 'Option already exist';
                    return $arrryError;
                }
            }
            foreach($this->dataVerifs as $data){
                if(isset($_POST[$data])){
                    $this->optionDatas[$data] = $_POST[$data];
                }
                $arrayError[$data] = $data.' is empty';
            }
            if(!empty($arrayError)){
                return $arrayError;
            }
            if(!empty($_FILES)){
                $optionPicture = $this->addPicture(Option::class);
                $this->optionDatas['optionPicture'] = $optionPicture;
                if($this->create(Option::class, $this->optionDatas)){
                    return true;
                }
            }
            $arrayError['optionPicture'] = 'optionPicture is empty';
            return $arrayError;
        }

        public function editOptionInfo(){
            $option = $this->findOptionById();
            $arrayError = [];
            foreach($this->dataVerifs as $data){
                if(isset($_POST[$data])){
                    $this->optionDatas[$data] = $_POST[$data];
                }
            }
            if(!empty($arrayError)){
                return $arrayError;
            }
            if($this->update(Option::class, $this->optionDatas, ['optionId' => $option->getOptionId()])){
                return true;
            }
            return $arrayError;
        }

        public function editOptionPicture(){
            $option = $this->findOptionById();
            $arrayError = [];
            if(!empty($_FILES)){
                $optionPicture = $this->updatePicture(Option::class, ['optionId' => $option->getOptionId()]);
                $this->optionDatas['optionPicture'] = $optionPicture;
                if($this->update(Option::class, $this->optionDatas, ['optionId' => $option->getOptionId()])){
                    return true;
                }
            }
            $arrayError['optionPicture'] = 'optionPicture is empty';
            return $arrayError;
        }

        public function deleteOption(){
            $option = $this->findOptionById();
            if($this->delete(Option::class, ['optionId' => $option->getOptionId()])){
                return true;
            }
            return false;
        }

       
}