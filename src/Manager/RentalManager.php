<?php

namespace App\Manager;

use DonkeyFive\Manager\AbstractManager;
use App\Entity\Rental;
use App\Manager\OptionManager;
use App\Manager\FieldManager;

class RentalManager extends AbstractManager {

    public function createRental(){
        $fieldManager = new FieldManager();
        $field = $fieldManager->findFieldById();
        $arrayError = [];
        $dataRents = [];
        $fieldTotalHT = [];
        $dateS = strtotime($_POST['dateStart']);
        $dateE = strtotime($_POST['dateEnd']);
        $hourS = strtotime($_POST['hourStart']);
        $hourE = strtotime($_POST['hourEnd']);
        if($dateS > $dateE){
            $arrayError['dateStart'] = 'dateStart is greater than dateEnd';
        }
        if($hourS > $hourE){
            $arrayError['hourStart'] = 'hourStart is greater than hourEnd';
        }
        if($hourS === $hourE){
            $arrayError['hourStart'] = 'hourStart is equal to hourEnd';
        }
        if(!empty($arrayError)){
            return $arrayError;
        }
        $nbDays = ($dateE - $dateS) / 86400;
        $nbHours = ($hourE - $hourS) / 3600;
        $arrayTimes = ['dateStart' => $_POST['dateStart'], 'dateEnd'  => $_POST['dateEnd'], 'hourStart'  => $_POST['hourStart'], 'hourEnd' => $_POST['hourEnd'], 'nbDays' => $nbDays, 'nbHours' => $nbHours];
        $dataRents = ['fieldId' => intval($_GET['id']), 'times' => $arrayTimes];
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
                        $arrayOptions[] = ['optionId' => $optionId, [ 'optionName'=>$option->getOptionName(), 'optionCostHT'=>$option->getOptionCostHT()]];
                    }
                }
            }
            $dataRents['totalOptionHT'] = $totalHT;
            $dataRents['totalHT'] = $totalHT + $dataRents['totalFieldHT'];
            $dataRents['options'] = $arrayOptions;
            $_SESSION['card'][] = $dataRents;
        }
        else{
            $dataRents['totalHT'] = $dataRents['totalFieldHT'];
            $_SESSION['card'][] = $dataRents;
        }
        
    }
}