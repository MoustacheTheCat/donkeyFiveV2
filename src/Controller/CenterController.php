<?php

namespace App\Controller;

use DonkeyFive\Controller\AbstractController;
use App\Manager\CenterManager;

class CenterController extends AbstractController {
    public function index() {
		$centerManager = new CenterManager();
		return $this->renderView('main/home.php', ['title' => 'Home',
			'center' => $centerManager->findAll()
		]);
	}
}