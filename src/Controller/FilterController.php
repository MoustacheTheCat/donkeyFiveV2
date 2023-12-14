<?php

namespace App\Controller;

use DonkeyFive\Controller\AbstractController;
use App\Manager\FilterManager;
use App\Manager\CenterManager;
use App\Manager\HomeManager;

class FilterController extends AbstractController {

    public function filter() {
        $id = intval($_POST['city']);
        $filterManager = new FilterManager();
        $centerManager = new CenterManager();
        $homeManger = new HomeManager();
		return $this->renderView('main/home.php', ['title' => 'Home',   
            'fields' => $filterManager->getAllFielsAndRentalsByCenterByIdint($id),
            'center' => $centerManager->findAll(),
            'europe' => $homeManger->getEuropeCard(),
			'legende' => $homeManger->getLegendeCard(),
			'choix' => $homeManger->getChoixCard(),
			'tournoi' => $homeManger->getTournoiCard()
		]);
	}
}