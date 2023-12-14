<?php

namespace App\Manager;

use DonkeyFive\Manager\AbstractManager;
use App\Entity\User;
use App\Manager\UserManager;

class AuthManager extends  AbstractManager{
        
        public function login() {
            $userManager = new UserManager();
            $user = $userManager->findByEmail($_POST['email']);
            if($user){
                if(password_verify($_POST['password'], $user->getUserPassword())){
                    $_SESSION['user']['id'] = $user->getUserId();
                    $_SESSION['role'] = 'user';
                    return true;
                }
            }
            return false;
        }
    
        public function logout() {
            unset($_SESSION['user']);
            unset($_SESSION['role']);
            session_destroy();
        }
}