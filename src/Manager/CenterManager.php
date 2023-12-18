<?php

namespace App\Manager;

use DonkeyFive\Manager\AbstractManager;
use App\Entity\Center;

class CenterManager extends  AbstractManager{

    public array $dataVerifs = ['centerName', 'centerAddress', 'centerZip', 'centerCity', 'centerCountry', 'centerDescription'];
    public array $centerDatas = [];
    
    public function findAll() {
		return $this->readMany(Center::class);
	}

    public function findCenterById($id) {
        return $this->readOne(Center::class, ['centerId' => $id ] );
    }

	public function getAllCenterCity(){
        return $this->readManyByQueryPerso(Center::class, $this->getAllQuerys()['allCenterCity']);
    }

    public function getCountrys() {
        return $this->getAllCountrys();
    } 

    public function addCenter(){
        $centers = $this->findAll();
        $arrayError = [];
        foreach($centers as $value){
            if($value->getCenterName() === $_POST['centerName']){
                $arrryError[] = 'Center already exist';
                return $arrryError;
            }
        }
        foreach($this->dataVerifs as $data){
            if(isset($_POST[$data])){
                $this->centerDatas[$data] = $_POST[$data];
            }
            $arrayError[$data] = $data.' is empty';
        }
        if(!empty($_FILES)){
            $centerPicture = $this->addPicture(Center::class);
            $this->centerDatas['centerPicture'] = $centerPicture;
            foreach($this->dataVerifs as $data){
                if(isset($_POST[$data])){
                    $this->centerDatas[$data] = $_POST[$data];
                }
            }
            if($this->create(Center::class, $this->centerDatas)){
                return true;
            }
        }
        $arrayError['centerPicture'] = 'centerPicture is empty';
        return $arrayError;
    }

    public function editCenterInfo(){
        $center = $this->findCenterById();
        $arrayError = [];
        foreach($this->dataVerifs as $data){
            if(isset($_POST[$data])){
                $this->centerDatas[$data] = $_POST[$data];
            }
            $arrayError[$data] = $data.' is empty';
        }
        if(!empty($_FILES)){
            $centerPicture = $this->addPicture(Center::class);
            $this->centerDatas['centerPicture'] = $centerPicture;
            if($this->update(Center::class, $this->centerDatas, ['centerId' => $_GET['id']])){
                return true;
            }
        }
        $arrayError['centerPicture'] = 'centerPicture is empty';
        return $arrayError;
    }

    public function editCenterPicture(){
        $center = $this->findCenterById();
        $arrayError = [];
        if(!empty($_FILES)){
            $centerPicture = $this->updatePicture(Center::class, ['centerId' => $center->getCenterId()]);
            $this->centerDatas['centerPicture'] = $centerPicture;
            if($this->update(Center::class, $this->centerDatas, ['centerId' => $center->getCenterId()])){
                return true;
            }
        }
        $arrayError['centerPicture'] = 'centerPicture is empty';
        return $arrayError;
    }

    public function deleteCenter(){
        $center = $this->findCenterById();
        if($this->delete(Center::class, ['centerId' => $center->getCenterId()])){
            return true;
        }
        return false;
    }
}