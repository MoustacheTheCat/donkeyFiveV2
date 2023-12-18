<?php

namespace App\Controller;

use DonkeyFive\Controller\AbstractController;
use App\Manager\OptionManager;

class OptionController extends AbstractController {
    public function shows() {
        $optionManager = new OptionManager();
        return $this->renderView('main/option/shows.php', [
			'options' => $optionManager->findAll(),
			'seo' => [
				'title' => 'Options',
				'description' => 'Options Page donkey Five'
			]
		]);
    }

    public function show() {
        $optionManager = new OptionManager();
        return $this->renderView('main/option/show.php', [
			'option' => $optionManager->findOptionById(),
			'seo' => [
				'title' => 'Option',
				'description' => 'Options Page donkey Five'
			]
		]);
    }

	public function optionList() {
		$optionManager = new OptionManager();
		header('Content-Type: application/json'); 
        if ($optionManager->findAll()) {
            echo json_encode($optionManager->findAll());
        } else {
            echo json_encode(['error' => 'Aucune donnée trouvée']);
        }
        exit;
	}

	public function add() {
		$this->verifIsadmin();
		return $this->renderView('main/option/add.php', [
			'seo' => [
				'title' => 'Create option',
				'description' => 'Create Option Page donkey Five',
				
			]
			]);
	}

	public function addCheck() {
		$this->verifIsadmin();
		$optionManager = new OptionManager();
		if($optionManager->addOption()){
			return $this->redirectToRoute('/options',[
				'state' => 'success',
				'success' => 'Option added'
			]);
		}
		return $this->redirectToRoute('addoption',[
			'data' => $optionManager->addOption(),
			'state' => 'error'
		]);
	}

	public function edit() {
		$this->verifIsadmin();
		$optionManager = new OptionManager();
		return $this->renderView('main/option/edit.php', [
			'option' => $optionManager->findOptionById(),
			'seo' => [
				'title' => 'Edit option',
				'description' => 'Edit Option Page donkey Five'
			]
		]);
	}

	public function editOptionInfo() {
		$this->verifIsadmin();
		$optionManager = new OptionManager();
		if($optionManager->editOptionInfo()){
			return $this->redirectToRoute('/options',[
				'state' => 'success',
				'success' => 'Option edited'
			]);
		}
		return $this->redirectToRoute('editoption',[
			'data' => $optionManager->editOptionInfo(),
			'state' => 'error'
		]);
	}

	public function editOptionPicture() {
		$this->verifIsadmin();
		$optionManager = new OptionManager();
		if($optionManager->editOptionPicture()){
			return $this->redirectToRoute('/options',[
				'state' => 'success',
				'success' => 'Option edited'
			]);
		}
		return $this->redirectToRoute('editoption',[
			'data' => $optionManager->editOptionPicture(),
			'state' => 'error'
		]);
	}

	public function deleteOption() {
		$this->verifIsadmin();
		$optionManager = new OptionManager();
		if($optionManager->deleteOption()){
			return $this->redirectToRoute('/options',[
				'state' => 'success',
				'success' => 'Option deleted'
			]);
		}
		return $this->redirectToRoute('/options',[
			'state' => 'error',
			'error' => 'Option not deleted'
		]);
	}
}