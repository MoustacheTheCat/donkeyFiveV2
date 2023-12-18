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
}