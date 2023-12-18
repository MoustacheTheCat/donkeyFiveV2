<?php

namespace App\Manager;

use DonkeyFive\Manager\AbstractManager;
use App\Entity\User;

class UserManager extends  AbstractManager{
    

    private array $dataVerifs = ['userName', 'userFirstName', 'userLastName', 'userEmail', 'userPassword', 'userNumber', 'userAddress', 'userZip', 'userCity', 'userCountry', 'userBirthDay'];
    public array $userDatas = [];

    public function getCountrys() {
        return $this->getAllCountrys();
    } 


    public function findAll() {
		return $this->readMany(User::class);
	}

    

    public function find($id) {
        return $this->readOne(User::class, ['userId' => $id]);
    }

    public function showProfile() {
        $id = $_SESSION['user']['id'];
        return $this->readOne(User::class, ['userId' => $id]);
    }

    

    public function createUser() {
        $datas = $this->findAllEmailAndNumber(User::class, $this->getAllQuerys()['allUserEmailAndNumber']);
        $arrayVerifs = [];
        foreach($datas as $data){
            $arrayVerifs[] = $data->getUserEmail();
            $arrayVerifs[] = $data->getUserNumber();
        }
        if(in_array($_POST['userEmail'], $arrayVerifs)){
            $error = 'email already exist';
            return $error;
        }
        if(in_array($_POST['userNumber'], $arrayVerifs)){
            $error = 'number already exist';
            return $error;
        }
        if($_POST['userPassword'] != $_POST['userPasswordConfirm']){
            $error = 'password not the same';
            return $error;
        }
        $_POST['userPassword'] = password_hash($_POST['userPassword'],  PASSWORD_ARGON2I );
        if(count($_POST)-1 == count($this->dataVerifs)){
            foreach($this->dataVerifs as $data){
                if(isset($_POST[$data])){
                    $this->userDatas[$data] = $_POST[$data];
                }
            }
            if($this->create(User::class, $this->userDatas)){
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
        $id = $_SESSION['user']['id'];
        foreach($this->dataVerifs as $data){
            if(isset($_POST[$data])){
                $this->userDatas[$data] = $_POST[$data];
            }
        }
        if($this->update(User::class, $this->userDatas, ['userId' => $id])){
            return true;
        }
        $error = 'user not update';
        return $error;
    }

    public function updateUserpicture() {
        $id = $_SESSION['user']['id'];
        $picture = $this->updatePicture(User::class, ['userId' => $id]);
        if(is_array($picture)){
            return $picture;
        }
        if($this->update(User::class, ['userPicture' => $picture], ['userId' => $id])){
            return true;
        }
        $error = 'user picture not update';
        return $error;
    }
   

    public function editUserPassword(){
        $id = $_SESSION['user']['id'];
        $user = $this->readOne(User::class, ['userId' => $id]);
        if(password_verify($_POST['password'], $user->getUserPassword())){
            if($_POST['newUserPassword'] == $_POST['newUserPasswordConfirm']){
                $newPassword = password_hash($_POST['newUserPassword'],  PASSWORD_ARGON2I );
                if($this->update(User::class, ['userPassword' => $newPassword], ['userId' => $id])){
                    return true;
                }
            }
        }
        $error = 'password not update';
        return $error;
    }

    public function deleteUser() {
        $id = $_SESSION['user']['id'];
        $user = $this->readOne(User::class, ['userId' => $id]);
        if(password_verify($_POST['password'], $user->getUserPassword())){
            if($this->delete(User::class, ['userId' => $id])){
                return true;
            }
            $error = 'user not delete';
            return $error;
        }
        $error = 'password not correct';
        return $error;
        
        
    }
   

}