<?php

namespace App\Manager;

use DonkeyFive\Manager\AbstractManager;
use App\Entity\User;

class UserManager extends  AbstractManager{
    

    public array $dataVerifs = ['adminName', 'adminFirstName', 'adminLastName', 'adminEmail', 'adminPassword', 'adminNumber'];
    public array $adminDatas = [];

    public function getCountrys() {
        return $this->getAllCountrys();
    }


    public function findAll() {
		return $this->readMany(Admin::class);
	}

    public function findAllEmailAndNumberUser(){
        return $this->readManyByQueryPerso(Admin::class, $this->getQuerys()['allAdminEmailAndNumber']);
    }

    public function find($id) {
        return $this->readOne(Admin::class, ['adminId' => $id]);
    }

    public function showProfile() {
        $id = $_SESSION['user']['id'];
        return $this->readOne(Admin::class, ['adminId' => $id]);
    }

    public function findByEmail($email) {
        return $this->readOne(Admin::class, ['adminEmail' => $email]);
    }

    public function createUser() {
        $datas = $this->findAllEmailAndNumberUser();
        $arrayVerifs = [];
        foreach($datas as $data){
            $arrayVerifs[] = $data->getUserEmail();
            $arrayVerifs[] = $data->getUserNumber();
        }
        if(in_array($_POST['adminEmail'], $arrayVerifs)){
            $error = 'email already exist';
            return $error;
        }
        if(in_array($_POST['adminNumber'], $arrayVerifs)){
            $error = 'number already exist';
            return $error;
        }
        if($_POST['adminPassword'] != $_POST['adminPasswordConfirm']){
            $error = 'password not the same';
            return $error;
        }
        $_POST['adminPassword'] = password_hash($_POST['adminPassword'],  PASSWORD_ARGON2I );
        if(count($_POST)-1 == count($this->dataVerifs)){
            foreach($this->dataVerifs as $data){
                if(isset($_POST[$data])){
                    $this->userDatas[$data] = $_POST[$data];
                }
            }
            if($this->create(Admin::class, $this->userDatas)){
                return true;
            }
        }else {
            $arrayError = [];
            foreach($this->dataVerif as $data){
                if(!isset($_POST[$data])){
                    $arrayError[$data] = 'empty ' . $data;
                }
                return $arrayError;
            }
        }
        
    }

    public function editUserInfo() {
        $id = $_SESSION['admin']['id'];
        foreach($this->dataVerifs as $data){
            if(isset($_POST[$data])){
                $this->userDatas[$data] = $_POST[$data];
            }
        }
        if($this->update(Admin::class, $this->userDatas, ['adminId' => $id])){
            return true;
        }
        $error = 'admin not update';
        return $error;
    }

    public function updateUserpicture() {
        $id = $_SESSION['admin']['id'];
        $picture = $this->updatePicture(Admin::class, ['adminId' => $id]);
        if(is_array($picture)){
            return $picture;
        }
        if($this->update(Admin::class, ['adminPicture' => $picture], ['adminId' => $id])){
            return true;
        }
        $error = 'admin picture not update';
        return $error;
    }
   

    public function editUserPassword(){
        $id = $_SESSION['admin']['id'];
        $user = $this->readOne(Admin::class, ['adminId' => $id]);
        if(password_verify($_POST['password'], $user->getUserPassword())){
            if($_POST['newUserPassword'] == $_POST['newUserPasswordConfirm']){
                $newPassword = password_hash($_POST['newUserPassword'],  PASSWORD_ARGON2I );
                if($this->update(Admin::class, ['adminPassword' => $newPassword], ['adminId' => $id])){
                    return true;
                }
            }
        }
        $error = 'password not update';
        return $error;
    }

    public function deleteUser() {
        $id = $_SESSION['admin']['id'];
        $user = $this->readOne(Admin::class, ['adminId' => $id]);
        if(password_verify($_POST['password'], $user->getUserPassword())){
            if($this->delete(Admin::class, ['adminId' => $id])){
                return true;
            }
            $error = 'admin not delete';
            return $error;
        }
        $error = 'password not correct';
        return $error;
        
        
    }
   

}