<?php

namespace App\Controller;

use DonkeyFive\Controller\AbstractController;
use App\Manager\AdminManager;
use App\Manager\AuthManager;

class AdminController extends AbstractController {

    public function showAdminProfile(){
        $adminManager = new AdminManager();
        return $this->renderView('main/admin/show.php', [
            'admin' => $adminManager->showProfile(),
            'seo' => [
                'title' => 'Show Admin',
                'description' => 'Show Admin Page donkey Five'
            ]
        ]);
    }

    public function add() {
        $adminManager = new AdminManager();
        return $this->renderView('main/admin/add.php', [
            'countrys' => $adminManager->getCountrys(),
			'seo' => [
				'title' => 'Create Admin',
				'description' => 'Create Admin Page donkey Five',
                
			]
		]);
    }

    public function addAdmin() {
        $adminManager = new AdminManager();
        $datas = $adminManager->createAdmin();
        if($datas === true){
            return $this->redirectToRoute('login', ['state' => 'success']);
        }
        return $this->add();
    }

    public function edit() {
        $adminManager = new AdminManager();
        return $this->renderView('main/admin/edit.php', [
            'admin' => $adminManager->showProfile(),
            'seo' => [
                'title' => 'Edit Admin',
                'description' => 'Edit Admin Page donkey Five'
            ]
        ]);
    }

    public function editAdminInfo() {
        $adminManager = new AdminManager();
        $datas = $adminManager->editAdminInfo();
        if($datas === true){
            return $this->redirectToRoute('adminprofile', ['state' => 'success']);
        }
        return $this->edit();
    }

    public function editAdminPicture() {
        $adminManager = new AdminManager();
        $adminManager->updateAdminPicture();
        return $this->redirectToRoute('adminprofile', ['state' => 'success']);
    }

    public function editAdminPassword() {
        $adminManager = new AdminManager();
        $datas = $adminManager->editAdminPassword();
        if($datas === true){
            return $this->redirectToRoute('adminprofile', ['state' => 'success']);
        }
        return $this->edit();
    }

    public function deleteUser() {
        $adminManager = new AdminManager();
        $authManager = new AuthManager();
        if($adminManager->deleteAdmin()){
            $authManager->logout();
            return $this->redirectToRoute('/', ['state' => 'success']);
        }
        return $this->redirectToRoute('adminprofile', ['state' => 'error']);

    }
}