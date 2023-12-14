<?php

namespace App\Controller;

use DonkeyFive\Controller\AbstractController;
use App\Controller\FilterController;
use App\Manager\HomeManager;
use App\Manager\FilterManager;

class HomeController extends AbstractController {
    public function home() {
		$homeManager = new HomeManager();
		return $this->renderView('main/home.php', [
			'center' => $homeManager->getAllCenterCity(),
			'cards' => $homeManager->getAllCards(),
			'seo' => [
				'title' => 'Home',
				'description' => 'Home Page donkey Five'
			]
		]);
	}

	public function homeFilter(){
		$id = intval($_POST['city']);
        $filterManager = new FilterManager();
        $homeManager = new HomeManager();
		return $this->renderView('main/home.php', [   
            'fields' => $filterManager->getAllFielsAndRentalsByCenterByIdint($id),
			'cards' => $homeManager->getAllCards(),
            'center' => $homeManager->getAllCenterCity(),
			'seo' => [
				'title' => 'Home',
				'description' => 'Home Page donkey Five'
			]
		]);
	}


	public function viewCardDetail(){
		$name = $_GET['name'];
		$homeManager = new HomeManager();
		return $this->renderView('main/card.php', [   
			'card' => $homeManager->getCardByname($name),
			'seo' => [
				'title' => $homeManager->getCardByname($name)['title'],
				'description' => 'Home Page donkey Five'
			]
		]);
	}
}