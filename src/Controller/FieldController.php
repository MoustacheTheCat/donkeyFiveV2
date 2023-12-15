<?php

namespace App\Controller;

use DonkeyFive\Controller\AbstractController;
use App\Manager\FieldManager;


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
}