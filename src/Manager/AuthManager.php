<?php

namespace App\Manager;

use DonkeyFive\Manager\AbstractManager;
use App\Entity\User;
use App\Entity\Admin;
use App\Manager\UserManager;
use App\Manager\AdminManager;

class AuthManager extends  AbstractManager{
        
        public function login() {
            $userManager = new UserManager();
            $user = $userManager->findByEmail(User::class, ['userEmail' => $_POST['email']]);
            if($user){
                if(password_verify($_POST['password'], $user->getUserPassword())){
                    $_SESSION['user']['id'] = $user->getUserId();
                    $_SESSION['role'] = 'user';
                    return true;
                }
            }
            else{
                $adminManager = new AdminManager();
                $admin = $adminManager->findByEmail(Admin::class, ['adminEmail' => $_POST['email']]);
                if($admin){
                    if(password_verify($_POST['password'], $admin->getAdminPassword())){
                        $_SESSION['user']['id'] = $admin->getAdminId();
                        $_SESSION['role'] = 'admin';
                        return true;
                    }
                }
                return false;
            }
        }
            
    
        public function logout() {
            unset($_SESSION['user']);
            unset($_SESSION['role']);
            session_destroy();
        }
}