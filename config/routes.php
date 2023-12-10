<?php

const ROUTES = [
	'/' => [
		'controller' => App\Controller\MainController::class,
		'method' => 'home'
	],
	'/contact' => [
		'controller' => App\Controller\MainController::class,
		'method' => 'contact'
	],
	'home' => [
		'controller' => App\Controller\MainController::class,
		'method' => 'home'
	],
	'article' => [
		'controller' => App\Controller\ArticleController::class,
		'method' => 'index'
	],
	'article/add' => [
		'controller' => App\Controller\ArticleController::class,
		'method' => 'add'
	]

];

