<?php

const ROUTES = [
	'/' => [
		'controller' => App\Controller\HomeController::class,
		'method' => 'home'
	],

	'home' => [
		'controller' => App\Controller\HomeController::class,
		'method' => 'homeFilter'
	],

	'card' => [
		'controller' => App\Controller\HomeController::class,
		'method' => 'viewCardDetail'
	],

	'login' => [
		'controller' => App\Controller\AuthController::class,
		'method' => 'login'
	],

	'logincheck' => [
		'controller' => App\Controller\AuthController::class,
		'method' => 'loginChek'
	],

	'logout' => [
		'controller' => App\Controller\AuthController::class,
		'method' => 'logout'
	],

	'userprofile' => [
		'controller' => App\Controller\UserController::class,
		'method' => 'showUserProfile'
	],

	'adduser' => [
		'controller' => App\Controller\UserController::class,
		'method' => 'add'
	],

	'addusercheck' => [
		'controller' => App\Controller\UserController::class,
		'method' => 'addUser'
	],

	'edituser' => [
		'controller' => App\Controller\UserController::class,
		'method' => 'edit'
	],
	'edituserinfo' => [
		'controller' => App\Controller\UserController::class,
		'method' => 'editUserInfo'
	],
	'edituserpicture' => [
		'controller' => App\Controller\UserController::class,
		'method' => 'editUserPicture'
	],
	'edituserpassword' => [
		'controller' => App\Controller\UserController::class,
		'method' => 'editUserPassword'
	],

	'deleteuser' => [
		'controller' => App\Controller\UserController::class,
		'method' => 'deleteUser'
	],

	'addadmin' => [
		'controller' => App\Controller\AdminController::class,
		'method' => 'add'
	],

	
];

