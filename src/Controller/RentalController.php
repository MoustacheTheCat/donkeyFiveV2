<?php

namespace App\Controller;

use DonkeyFive\Controller\AbstractController;
use App\Manager\RentalManager;

class RentalController extends AbstractController {
    public function add() {
        $rentalManager = new RentalManager();
        $data = $rentalManager->createRental();
        return $this->redirectToRoute('/', [
            'state' => 'success',
            ]);
    }
    public function shows() {
        $rentalManager = new RentalManager();
        return $this->renderView('main/rental/shows.php', [
            'seo' => [
				'title' => 'Cards',
				'description' => 'Cards Page donkey Five'
			]
            ]);
    }
}