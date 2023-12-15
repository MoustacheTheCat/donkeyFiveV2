<?php

const ROUTES = [
	'/' => [
		'controller' => App\Controller\HomeController::class,
		'method' => 'home'
	],

	'filter' => [
		'controller' => App\Controller\FieldController::class,
		'method' => 'dataFilter'
	],

	'card' => [
		'controller' => App\Controller\HomeCardController::class,
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

	'userprofil' => [
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

	"adminprofil" => [
		'controller' => App\Controller\AdminController::class,
		'method' => 'showAdminProfile'
	],

	'addadmin' => [
		'controller' => App\Controller\AdminController::class,
		'method' => 'add'
	],

	'addadmincheck' => [
		'controller' => App\Controller\AdminController::class,
		'method' => 'addAdmin'
	],

	'editadmin' => [
		'controller' => App\Controller\AdminController::class,
		'method' => 'edit'
	],

	'editadmininfo' => [
		'controller' => App\Controller\AdminController::class,
		'method' => 'editAdminInfo'
	],

	'editadminpicture' => [
		'controller' => App\Controller\AdminController::class,
		'method' => 'editAdminPicture'
	],

	'editadminpassword' => [
		'controller' => App\Controller\AdminController::class,
		'method' => 'editAdminPassword'
	],

	'deleteadmin' => [
		'controller' => App\Controller\AdminController::class,
		'method' => 'deleteAdmin'
	],
];

