// callFilterManager.php

<?php



use App\Manager\FilterManager;


$filterManager = new FilterManager();


$centerId = isset($_GET['centerId']) ? (int) $_GET['centerId'] : 0;
var_dump($centerId);

header('Content-Type: application/json');
echo json_encode($filterManager->getAllFielsAndRentalsByCenterByIdint($centerId));
