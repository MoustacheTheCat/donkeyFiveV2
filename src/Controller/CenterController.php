<?php

namespace App\Controller;

use DonkeyFive\Controller\AbstractController;
use App\Manager\CenterManager;
use App\Manager\FieldManager;

class CenterController extends AbstractController {
    public function shows() {
		$centerManager = new CenterManager();
		return $this->renderView('main/center/shows.php', [
			'centers' => $centerManager->findAll(),
			'seo' => [
				'title' => 'Centers',
				'description' => 'Centers Page donkey Five'
			]
		]);
	}

	public function show() {
		$id = intval($_GET['id']);
		$centerManager = new CenterManager();
		$fieldManager = new FieldManager();
		return $this->renderView('main/center/show.php', [
			'center' => $centerManager->findCenterById($id),
			'fields' => $fieldManager->getAllFielsByCenterId($id),
			'seo' => [
				'title' => 'Center',
				'description' => 'Center Page donkey Five'
			]
		]);
	}

	public function add() {
		$this->verifIsadmin();
		$centerManager = new CenterManager();
		return $this->renderView('main/center/add.php', [
			'countrys' => $centerManager->getCountrys(),
			'seo' => [
				'title' => 'Create center',
				'description' => 'Create Center Page donkey Five',
				
			]
		]);
	}

	public function addCheck() {
		$this->verifIsadmin();
		$centerManager = new CenterManager();
		if($centerManager->addCenter()){
			return $this->redirectToRoute('centers',[
				'state' => 'success',
				'success' => 'Center added'
			]);
		}
		return $this->redirectToRoute('addcenter',[
			'state' => 'error',
			'error' => 'Error while adding center'
		]);
	}

	public function edit() {
		$this->verifIsadmin();
		$id = intval($_GET['id']);
		$centerManager = new CenterManager();
		return $this->renderView('main/center/edit.php', [
			'center' => $centerManager->findCenterById($id),
			'countrys' => $centerManager->getCountrys(),
			'seo' => [
				'title' => 'Edit center',
				'description' => 'Edit Center Page donkey Five',
				
			]
		]);
	}

	public function editInfo() {
		$this->verifIsadmin();
		$centerManager = new CenterManager();
		$centerManager->editCenter();
		if($centerManager->editCenter()){
			return $this->redirectToRoute('centers',[
				'state' => 'success',
				'success' => 'centers edited'
			]);
		}
		return $this->redirectToRoute('editoption',[
			'data' => $centerManager->editCenter(),
			'state' => 'error'
		]);
	}

	public function deleteCenter() {
		$this->verifIsadmin();
		$centerManager = new CenterManager();
		if($centerManager->deleteCenter()){
			return $this->redirectToRoute('centers',[
				'state' => 'success',
				'success' => 'Center deleted'
			]);
		}
		return $this->redirectToRoute('centers',[
			'state' => 'error',
			'error' => 'Error while deleting center'
		]);
		
	}
}