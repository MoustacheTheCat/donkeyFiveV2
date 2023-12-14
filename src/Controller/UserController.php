<?php

namespace App\Controller;

use DonkeyFive\Controller\AbstractController;
use App\Controller\FilterController;
use App\Manager\UserManager;
use App\Manager\AuthManager;

class UserController extends AbstractController {

    public function showUserProfile(){
        $userManager = new UserManager();
        return $this->renderView('main/user/show.php', [
            'user' => $userManager->showProfile(),
            'seo' => [
                'title' => 'Show User',
                'description' => 'Show User Page donkey Five'
            ]
        ]);
    }
    public function add() {
        $userManager = new UserManager();
        return $this->renderView('main/user/add.php', [
            'countrys' => $userManager->getCountrys(),
			'seo' => [
				'title' => 'Create User',
				'description' => 'Create User Page donkey Five',
                
			]
		]);
    }

    public function addUser() {
        $userManager = new UserManager();
        $datas = $userManager->createUser();
        if($datas === true){
            return $this->redirectToRoute('login', ['state' => 'success']);
        }
        return $this->renderView('main/user/add.php', [
            'datas' => $datas,
            'countrys' => $userManager->getCountrys(),
            'seo' => [
                'title' => 'Create User',
                'description' => 'Create User Page donkey Five'
            ]
        ]);
    }

    public function edit() {
        $userManager = new UserManager();
        return $this->renderView('main/user/edit.php', [
            'user' => $userManager->showProfile(),
            'countrys' => $userManager->getCountrys(),
            'seo' => [
                'title' => 'Edit User',
                'description' => 'Edit User Page donkey Five'
            ]
        ]);
    }

    public function editUserInfo() {
        $userManager = new UserManager();
        $datas = $userManager->editUserInfo();
        if($datas === true){
            return $this->redirectToRoute('userprofile', ['state' => 'success']);
        }
        return $this->renderView('main/user/edit.php', [
            'datas' => $datas,
            'user' => $userManager->showProfile(),
            'countrys' => $userManager->getCountrys(),
            'seo' => [
                'title' => 'Edit User',
                'description' => 'Edit User Page donkey Five'
            ]
        ]);
    }

    public function editUserPicture() {
        $userManager = new UserManager();
        $userManager->updateUserPicture();
        return $this->redirectToRoute('userprofile', ['state' => 'success']);
    }

    public function editUserPassword() {
        $userManager = new UserManager();
        $datas = $userManager->editUserPassword();
        if($datas === true){
            return $this->redirectToRoute('userprofile', ['state' => 'success']);
        }
        return $this->renderView('main/user/edit.php', [
            'datas' => $datas,
            'user' => $userManager->showProfile(),
            'countrys' => $userManager->getCountrys(),
            'seo' => [
                'title' => 'Edit User',
                'description' => 'Edit User Page donkey Five'
            ]
        ]);
    }

    public function deleteUser() {
        $userManager = new UserManager();
        $authManager = new AuthManager();
        if($userManager->deleteUser()){
            $authManager->logout();
            return $this->redirectToRoute('/', ['state' => 'success']);
        }
        return $this->redirectToRoute('userprofile', ['state' => 'error']);

    }
}