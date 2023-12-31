<?php

namespace App\Controller;

use DonkeyFive\Controller\AbstractController;
use App\Manager\RentalManager;
use App\Manager\FieldManager;
use App\Manager\OptionManager;

class RentalController extends AbstractController {

    public function showRentals() {
        $rentalManager = new RentalManager();
        return $this->renderView('main/rental/shows.php', [
            'rentals' => $rentalManager->findAll(),
            'seo' => [
                'title' => 'Rentals',
                'description' => 'Rentals Page donkey Five'
            ]
        ]);
    }

    public function showRental() {
        $rentalManager = new RentalManager();
        return $this->renderView('main/rental/show.php', [
            'rental' => $rentalManager->findByGetId(),
            'seo' => [
                'title' => 'Rental',
                'description' => 'Rental Page donkey Five'
            ]
        ]);
    }


    public function getRentalDatas() {
        $rentalManager = new RentalManager();
        $datas = $rentalManager->findAll();
        header('Content-Type: application/json'); 
        if ($datas) {
            echo json_encode($datas);
        } else {
            echo json_encode(['error' => 'Aucune donnée trouvée']);
        }
        exit;
    }
    public function add() {
        $rentalManager = new RentalManager();
        $data = $rentalManager->createRental();
        if($date){
            return $this->redirectToRoute('/', [
                'state' => 'success',
                ]);
        }
        return $this->redirectToRoute('/', [
            'state' => 'error',
            ]);
    }
    public function showCards() {
        $rentalManager = new RentalManager();
        $cards = $_SESSION['card'];
        return $this->renderView('main/card/shows.php', [
            'cards' => $cards,
            'seo' => [
				'title' => 'Cards',
				'description' => 'Cards Page donkey Five'
			]
            ]);
    }
    public function showCard() {
        $rentalManager = new RentalManager();
        return $this->renderView('main/card/show.php', [
            'card' => $rentalManager->show(),
            'seo' => [
                'title' => 'Card',
				'description' => 'Cards Page donkey Five'
			]
            ]);
    }

    public function edit() {
        $rentalManager = new RentalManager();
        $optionManager = new OptionManager();
        return $this->renderView('main/card/edit.php', [
            'card' => $rentalManager->show(),
            'options' => $optionManager->findAll(),
            'seo' => [
                'title' => 'Card Edit',
				'description' => 'Cards Page donkey Five'
			]
            ]);
    }

    public function updateOption() {
        $rentalManager = new RentalManager();
        if($rentalManager->updateRentOptionCheck()){
            return $this->redirectToRoute('/', [
                'state' => 'success',
                ]);
        }
        header('Content-Type: application/json'); 
            $response = ['state' => 'error'];
            echo json_encode($response);
            exit;
        
    }

    public function updateInfo(){
        $rentalManager = new RentalManager();
        if($rentalManager->updateRentInfoCheck()){
            return $this->redirectToRoute('/', [
                'state' => 'success',
                ]);
        }
        else{
            return $this->redirectToRoute('/', [
                'state' => 'error',
                ]);
        }
        
    }

    public function delete(){
        $id = $_GET['id'];
        unset($_SESSION['card'][$id]);
        return $this->redirectToRoute('/', [
			'state' => 'success',
			]);
    }

    public function cardCheck(){
        $this->verifIsUser();
        $rentalManager = new RentalManager();
        if($rentalManager->addOneRentCheck()){
            return $this->redirectToRoute('/', [
                'state' => 'success',
                ]);
        }
        else{
            return $this->redirectToRoute('/', [
                'state' => 'error',
                ]);
        
        }
    }
    public function cardCheckAll(){
        $this->verifIsUser();
        $rentalManager = new RentalManager();
        $rentalManager->addAllRentCheck();
    }

    public function checkRental(){
        $this->verifIsAdmin();
        $rentalManager = new RentalManager();
        if($rentalManager->checkRentalStatus()){
            return $this->redirectToRoute('/', [
                'state' => 'success',
                ]);
        }
        else{
            return $this->redirectToRoute('/', [
                'state' => 'error',
                ]);
        }
    }
}

