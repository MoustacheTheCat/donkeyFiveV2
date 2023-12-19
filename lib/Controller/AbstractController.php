<?php

namespace DonkeyFive\Controller;

abstract class AbstractController {
    protected function renderView(string $template, array $data = []): string {
		$templatePath = dirname(__DIR__, 2) . '/templates/' . $template;
		return require_once dirname(__DIR__, 2) . '/templates/layout.php';
	}
    protected function redirectToRoute(string $path, array $params = []): void {
		$uri = $_SERVER['SCRIPT_NAME'] . "?path=" . $path;

		if (!empty($params)) {
			$strParams = [];
			foreach ($params as $key => $val) {
				array_push($strParams, urlencode((string) $key) . '=' . urlencode((string) $val));
			}
			$uri .= '&' . implode('&', $strParams);
		}

		header("Location: " . $uri);
		die;
	}

	protected function verifIsadmin(){
		if($_SESSION['role'] !== 'admin'){
			return $this->redirectToRoute('/',[
				'state' => 'error',
				'error' => 'You are not allowed to access this page'
			]);
		}
	}

	protected function verifIsUser(){
		if(empty($_SESSION['role']) || ($_SESSION['role'] !== 'user')){
			return $this->redirectToRoute('login',[
				'state' => 'error',
				'error' => 'Vous de vez être connecté pour accéder à cette page'
			]);
		}
	}
}