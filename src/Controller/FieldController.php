<?php

namespace App\Controller;

use DonkeyFive\Controller\AbstractController;
use App\Manager\FieldManager;
use App\Manager\CenterManager;
use App\Manager\OptionManager;


class FieldController extends AbstractController {

    

    public function dataFilter() {
        $id = intval($_GET['id']);
        $fieldManager = new FieldManager();
        $data = $fieldManager->getAllFielsByCenterId($id);
        header('Content-Type: application/json'); 
        if ($data) {
            echo json_encode($data);
        } else {
            echo json_encode(['error' => 'Aucune donnée trouvée']);
        }
        exit;
	}

    public function shows() {
        $fieldManager = new FieldManager();
        return $this->renderView('main/field/shows.php', [
            'fields' => $fieldManager->findAll(),
            'seo' => [
                'title' => 'Fields',
                'description' => 'Fields Page donkey Five'
            ]
        ]);
    }

    public function show() {
        $fieldManager = new FieldManager();
        $optionManager = new OptionManager();
        return $this->renderView('main/field/show.php', [
            'field' => $fieldManager->findFieldById(),
            'options' => $optionManager->getAllOptionByFieldId(intval($_GET['id'])),
            'seo' => [
                'title' => 'Field',
                'description' => 'Field Page donkey Five'
            ]
        ]);
    }

    public function add() {
        $this->verifIsadmin();
        $centerManager = new CenterManager();
        return $this->renderView('main/field/add.php', [
            'centers' => $centerManager->findAll(),
            'seo' => [
                'title' => 'Create field',
                'description' => 'Create Field Page donkey Five',
                
            ]
        ]);
    }

    public function addCheck() {
        $this->verifIsadmin();
        $fieldManager = new FieldManager();
        if($fieldManager->addField()){
            return $this->redirectToRoute('/fields',[
                'state' => 'success',
                'success' => 'Field added'
            ]);
        }
        return $this->redirectToRoute('/addfield',[
            'state' => 'error',
            'error' => 'Error while adding field'
        ]);
    }

    public function edit() {
        $this->verifIsadmin();
        $fieldManager = new FieldManager();
        $centerManager = new CenterManager();
        return $this->renderView('main/field/edit.php', [
            'field' => $fieldManager->findFieldById(),
            'centers' => $centerManager->findAll(),
            'seo' => [
                'title' => 'Edit field',
                'description' => 'Edit Field Page donkey Five',
                
            ]
        ]);
    }


    public function editFieldInfo() {
        $this->verifIsadmin();
        $fieldManager = new FieldManager();
        if($fieldManager->editFieldInfo()){
            return $this->redirectToRoute('/fields',[
                'state' => 'success',
                'success' => 'Field edited'
            ]);
        }
        return $this->redirectToRoute('/editfield',[
            'state' => 'error',
            'error' => 'Error while editing field'
        ]);
    }

    public function editFieldPicture() {
        $this->verifIsadmin();
        $fieldManager = new FieldManager();
        if($fieldManager->editFieldPicture()){
            return $this->redirectToRoute('/fields',[
                'state' => 'success',
                'success' => 'Field edited'
            ]);
        }
        return $this->redirectToRoute('/editfield',[
            'state' => 'error',
            'error' => 'Error while editing field'
        ]);
    }

    public function deleteField() {
        $this->verifIsadmin();
        $fieldManager = new FieldManager();
        if($fieldManager->deleteField()){
            return $this->redirectToRoute('/fields',[
                'state' => 'success',
                'success' => 'Field deleted'
            ]);
        }
        return $this->redirectToRoute('/fields',[
            'state' => 'error',
            'error' => 'Error while deleting field'
        ]);
    }


}