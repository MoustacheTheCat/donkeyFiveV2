<?php

namespace App\Controller;

use DonkeyFive\Controller\AbstractController;
use App\Manager\AuthManager;

class AuthController extends AbstractController {
    public function login(){
        return $this->renderView('main/auth/login.php', [
			'seo' => [
				'title' => 'Login',
				'description' => 'Login Page donkey Five'
			]
		]);
    }

	public function loginChek(){
		$authManager = new AuthManager();
		$authManager->login();
		if(isset($_SESSION['user'])){
			return $this->redirectToRoute('/', ['state' => 'success']);
		}
		return $this->redirectToRoute('login', ['state' => 'error']);
	}

	public function logout(){
		$authManager = new AuthManager();
		$authManager->logout();
		return $this->redirectToRoute('/', ['state' => 'success']);
	}
}