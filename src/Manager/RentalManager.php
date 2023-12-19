<?php

namespace App\Manager;

use DonkeyFive\Manager\AbstractManager;
use App\Entity\Rental;
use App\Manager\OptionManager;
use App\Manager\FieldManager;

class RentalManager extends AbstractManager {

    public function findAll() {
        return $this->readMany(Rental::class);
    }

    public function findByGetId() {
        return $this->readOne(Rental::class, ['rentalId' => $_GET['id']]);
    }

    public function findByParamId($id) {
        return $this->readOne(Rental::class, ['rentalId' => $id]);
    }

    public function createRental(){
        $arrayError = [];
        $dateDefault = strtotime(date('Y-m-d'));
        $hourDefault = strtotime(date('H:i'));
        $hourMin = strtotime('08:00');
        $hourMax = strtotime('21:00');
        $dateS = strtotime($_POST['dateStart']);
        $dateE = strtotime($_POST['dateEnd']);
        $hourS = strtotime($_POST['hourStart']);
        $hourE = strtotime($_POST['hourEnd']);
        if($dateS === $dateDefault && $dateE === $dateDefault){
            if($hourS < $hourDefault ){
                $arrayError['hourStart'] = 'hourStart is less than hourDefault';
                return $arrayError;
            }
            if($hourE < $hourDefault){
                $arrayError['hourEnd'] = 'hourEnd is less than hourDefault';
                return $arrayError;
            }
            if($hourS === $hourDefault){
                $arrayError['hourStart'] = 'hourStart is equal to hourDefault';
                return $arrayError;
            }
            if($hourE === $hourDefault){
                $arrayError['hourEnd'] = 'hourEnd is equal to hourDefault';
                return $arrayError;
            }
            if($hourS < $hourMin || $hourS > $hourMax){
                $arrayError['hourStart'] = 'hourStart is greater than hourEnd';
                return $arrayError;
            }
            if($hourE < $hourMin || $hourE > $hourMax){
                $arrayError['hourEnd'] = 'hourEnd is greater than hourEnd';
                return $arrayError;
            }
        }
        if($dateS > $dateE){
            $arrayError['dateStart'] = 'dateStart is greater than dateEnd';
            return $arrayError;
        }
        if($hourS > $hourE){
            $arrayError['hourStart'] = 'hourStart is greater than hourEnd';
            return $arrayError;
        }
        if($hourS === $hourE){
            $arrayError['hourStart'] = 'hourStart is equal to hourEnd';
            return $arrayError;
        }
        $fieldManager = new FieldManager();
        $field = $fieldManager->findFieldById();
        
        $dataRents = [];
        $fieldTotalHT = [];
        $nbDays = ($dateE - $dateS) / 86400;
        $nbHours = ($hourE - $hourS) / 3600;
        $arrayTimes = ['dateStart' => $_POST['dateStart'], 'dateEnd'  => $_POST['dateEnd'], 'hourStart'  => $_POST['hourStart'], 'hourEnd' => $_POST['hourEnd'], 'nbDays' => $nbDays, 'nbHours' => $nbHours];
        $dataRents = ['fieldId' => intval($_GET['id']),'fieldName' => $field->getFieldName(),'fieldTarifHourHT' => $field->getFieldTarifHourHT(),'fieldTarifDayHT' => $field->getFieldTarifDayHT(), 'times' => $arrayTimes];
        if($nbDays > 0){
            $dataRents['totalFieldHT'] = $field->getFieldTarifDayHT() * $nbDays;
        }
        else{
            $dataRents['totalFieldHT'] = $field->getFieldTarifHourHT() * $nbHours;
        }
        
        
        if(!empty($_POST['option'])){
            $optionManager = new OptionManager();
            $options = $optionManager->findAll();
            $totalHT = 0;
            foreach($options as $option){
                foreach($_POST['option'] as $optionId){
                    if($option->getOptionId() == $optionId){
                        $totalHT += $option->getOptionCostHT();
                        $arrayOptions[$option->getOptionId()] = [ 'optionName'=>$option->getOptionName(), 'optionCostHT'=>$option->getOptionCostHT()];
                    }
                }
            }
            $dataRents['totalOptionHT'] = $totalHT;
            $dataRents['totalHT'] = $totalHT + $dataRents['totalFieldHT'];
            $dataRents['options'] = $arrayOptions;
            $_SESSION['card'][] = $dataRents;
            return true;
        }
        else{
            $dataRents['totalHT'] = $dataRents['totalFieldHT'];
            $_SESSION['card'][] = $dataRents;
            return true;
        }
        
    }

    public function show(){
        $id = intval($_GET['id']);
        
        $card = $_SESSION['card'][$id];
        
        return $card;
    }

    public function updateRentOptionCheck(){
        $id = intval($_GET['id']);
        $datas = file_get_contents('php://input');
        $datas = json_decode($datas, true);
        if(!empty($datas)){
            $optionManager = new OptionManager();
            $arrayAdds = $datas['arrayOptionAdds'];
            $arrayDeletes = $datas['arrayOptionDeletes'];
            $options = $optionManager->findAll();
            if(!empty($arrayAdds)){
                foreach($options as $option){
                    if(in_array($option->getOptionId(), $arrayAdds)){
                        $_SESSION['card'][$id]['options'][$option->getOptionId()]['optionName'] = $option->getOptionName();
                        $_SESSION['card'][$id]['options'][$option->getOptionId()]['optionCostHT'] = $option->getOptionCostHT();
                        $_SESSION['card'][$id]['totalOptionHT'] += $option->getOptionCostHT();
                    }
                }
            }
            if(!empty($arrayDeletes)){
                foreach($options as $option){
                    if(in_array($option->getOptionId(), $arrayDeletes)){
                        $_SESSION['card'][$id]['totalOptionHT'] -= $option->getOptionCostHT();
                        unset($_SESSION['card'][$id]['options'][$option->getOptionId()]);
                    }
                
                }
            }
            $_SESSION['card'][$id]['totalHT'] = $_SESSION['card'][$id]['totalFieldHT'] + $_SESSION['card'][$id]['totalOptionHT'];
            return true;
        }
        return false;
    }

    public function updateRentInfoCheck(){
        if(!empty($_POST)){
            $id = intval($_GET['id']);
            $dateDefault = strtotime(date('Y-m-d'));
            $hourDefault = strtotime(date('H:i'));
            $hourMin = strtotime('08:00');
            $hourMax = strtotime('21:00');
            $dateS = strtotime($_POST['dateStart']);
            $dateE = strtotime($_POST['dateEnd']);
            $hourS = strtotime($_POST['hourStart']);
            $hourE = strtotime($_POST['hourEnd']);
            if($dateS === $dateDefault && $dateE === $dateDefault){
                if($hourS < $hourDefault ){
                    $arrayError['hourStart'] = 'hourStart is less than hourDefault';
                    return $arrayError;
                }
                if($hourE < $hourDefault){
                    $arrayError['hourEnd'] = 'hourEnd is less than hourDefault';
                    return $arrayError;
                }
                if($hourS === $hourDefault){
                    $arrayError['hourStart'] = 'hourStart is equal to hourDefault';
                    return $arrayError;
                }
                if($hourE === $hourDefault){
                    $arrayError['hourEnd'] = 'hourEnd is equal to hourDefault';
                    return $arrayError;
                }
                if($hourS < $hourMin || $hourS > $hourMax){
                    $arrayError['hourStart'] = 'hourStart is greater than hourEnd';
                    return $arrayError;
                }
                if($hourE < $hourMin || $hourE > $hourMax){
                    $arrayError['hourEnd'] = 'hourEnd is greater than hourEnd';
                    return $arrayError;
                }
            }
            if($dateS > $dateE){
                $arrayError['dateStart'] = 'dateStart is greater than dateEnd';
                return $arrayError;
            }
            if($hourS > $hourE){
                $arrayError['hourStart'] = 'hourStart is greater than hourEnd';
                return $arrayError;
            }
            if($hourS === $hourE){
                $arrayError['hourStart'] = 'hourStart is equal to hourEnd';
                return $arrayError;
            }
            $nbDays = ($dateE - $dateS) / 86400;
            $nbHours = ($hourE - $hourS) / 3600;
            $_SESSION['card'][$id]['times']['dateStart'] = $_POST['dateStart'];
            $_SESSION['card'][$id]['times']['dateEnd'] = $_POST['dateEnd'];
            $_SESSION['card'][$id]['times']['hourStart'] = $_POST['hourStart'];
            $_SESSION['card'][$id]['times']['hourEnd'] = $_POST['hourEnd'];
            $_SESSION['card'][$id]['times']['nbDays'] = $nbDays;
            $_SESSION['card'][$id]['times']['nbHours'] = $nbHours;

            if($nbDays > 0){
                $_SESSION['card'][$id]['totalFieldHT'] = $_SESSION['card'][$id]['fieldTarifDayHT'] * $nbDays;
            }
            else{
                $_SESSION['card'][$id]['totalFieldHT'] = $_SESSION['card'][$id]['fieldTarifHourHT'] * $nbHours;
            }
            $_SESSION['card'][$id]['totalHT'] = $_SESSION['card'][$id]['totalFieldHT'] + $_SESSION['card'][$id]['totalOptionHT'];
            return true;
        }
        return false;
    }

    public function addOneRentCheck(){
        $id = intval($_GET['id']);
        $dataForRents = [];
        $dataRents = $_SESSION['card'][$id];
        var_dump($dataRents);
        $dataForRents['rentalNumber'] = $this->createRentalNumber();
        $dataForRents['userId'] = $_SESSION['user']['id'];
        $dataForRents['fieldId'] = $dataRents['fieldId'];
        if(!empty($dataRents['options'])){
            $dataForRents['rentalDataOptions'] = json_encode($dataRents['options']);
        }
        
        $dataForRents['rentalDataTimes'] = json_encode($dataRents['times']);
        $dataForRents['rentalTotalHT'] = $dataRents['totalHT'];
        $dataForRents['rentalTotalTTC'] = $dataRents['totalHT'] * 1.2;
        var_dump($dataForRents);
        if($this->create(Rental::class, $dataForRents)){
            unset($_SESSION['card'][$id]);
            return true;
        }
        return false;
    }
    public function addAllRentCheck(){
        $dataRents = $_SESSION['card'];
        $userId = $_SESSION['user']['id'];
        $rentalNumber = $this->createRentalNumber();
        var_dump($dataRents);
        var_dump($userId);
        var_dump($rentalNumber);
        die();
    }

 

    protected function createRentalNumber(){
        $rentalNumber = rand(0, 999999);
		$rental = $this->readManyByQueryPerso(Rental::class, $this->getAllQuerys()['allRentalNumber']);
		if(empty($rental)){
			return $rentalNumber;
		}
		else{
            foreach($rental as $rent){
                if($rent->getRentalNumber() === $rentalNumber){
                    return createRentalNumber();
                }
            }
            return $rentalNumber;
        }
	}

    public function checkRentalStatus(){
        $id = intval($_GET['id']);
        $status = [];
        if($_GET['status'] == 0){
            $status['rentalStatus'] = 0;
        }
        elseif($_GET['status'] == 2){
            $status['rentalStatus'] = 2;
        }
        $res = $this->update(Rental::class, $status, ['rentalId' => $id]);
        if($res){
            return true;
        }
        return false;
    }

} 