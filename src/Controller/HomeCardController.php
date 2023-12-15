<?php

namespace App\Controller;

use DonkeyFive\Controller\AbstractController;
use App\Manager\HomeCardManager;

class HomeCardController extends AbstractController {
    

	public function viewCardDetail(){
		$name = $_GET['name'];
		$homeCardManager = new HomeCardManager();
		return $this->renderView('main/card.php', [   
			'card' => $homeCardManager->getCardByname($name),
			'seo' => [
				'title' => $homeCardManager->getCardByname($name)['title'],
				'description' => 'Detail home card donkey Five'
			]
		]);
	}
}