<?php

namespace App\Controller;

use DonkeyFive\Controller\AbstractController;
use App\Controller\FilterController;
use App\Manager\CenterManager;
use App\Manager\FilterManager;
use App\Manager\HomeCardManager;

class HomeController extends AbstractController {
    public function home() {
		$centerManager = new CenterManager();
		$homeCardManager = new HomeCardManager();
		return $this->renderView('main/home.php', [
			'center' => $centerManager->getAllCenterCity(),
			'cards' => $homeCardManager->getAllCards(),
			'seo' => [
				'title' => 'Home',
				'description' => 'Home Page donkey Five'
			]
		]);
	}
}