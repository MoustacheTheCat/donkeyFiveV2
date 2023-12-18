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

	'options' => [
		'controller' => App\Controller\OptionController::class,
		'method' => 'shows'
	],
	
	'optionlist' => [
		'controller' => App\Controller\OptionController::class,
		'method' => 'optionList'
	],

	'option' => [
		'controller' => App\Controller\OptionController::class,
		'method' => 'show'
	],

	'addoption' => [
		'controller' => App\Controller\OptionController::class,
		'method' => 'add'
	],

	'addoptioncheck' => [
		'controller' => App\Controller\OptionController::class,
		'method' => 'addCheck'
	],

	'editoption' => [
		'controller' => App\Controller\OptionController::class,
		'method' => 'edit'
	],

	'editoptioninfo' => [
		'controller' => App\Controller\OptionController::class,
		'method' => 'editOptionInfo'
	],

	'editoptionpicture' => [
		'controller' => App\Controller\OptionController::class,
		'method' => 'editOptionPicture'
	],

	'deleteoption' => [
		'controller' => App\Controller\OptionController::class,
		'method' => 'deleteOption'
	],

	'fields' => [
		'controller' => App\Controller\FieldController::class,
		'method' => 'shows'
	],

	'field' => [
		'controller' => App\Controller\FieldController::class,
		'method' => 'show'
	],

	'addfield' => [
		'controller' => App\Controller\FieldController::class,
		'method' => 'add'
	],

	'addfieldcheck' => [
		'controller' => App\Controller\FieldController::class,
		'method' => 'addCheck'
	],

	'editfield' => [
		'controller' => App\Controller\FieldController::class,
		'method' => 'edit'
	],

	'editfieldinfo' => [
		'controller' => App\Controller\FieldController::class,
		'method' => 'editFieldInfo'
	],

	'editfieldpicture' => [
		'controller' => App\Controller\FieldController::class,
		'method' => 'editFieldPicture'
	],

	'deletefield' => [
		'controller' => App\Controller\FieldController::class,
		'method' => 'deleteField'
	],

	'cards' => [
		'controller' => App\Controller\CardController::class,
		'method' => 'shows'
	],

	'card' => [
		'controller' => App\Controller\CardController::class,
		'method' => 'show'
	],

	'addcard' => [
		'controller' => App\Controller\CardController::class,
		'method' => 'add'
	],

	'addcardcheck' => [
		'controller' => App\Controller\CardController::class,
		'method' => 'addCheck'
	],

	'editcard' => [
		'controller' => App\Controller\CardController::class,
		'method' => 'edit'
	],

	'deletecard' => [
		'controller' => App\Controller\CardController::class,
		'method' => 'deleteCard'
	],

	'centers' => [
		'controller' => App\Controller\CenterController::class,
		'method' => 'shows'
	],

	'center' => [
		'controller' => App\Controller\CenterController::class,
		'method' => 'show'
	],

	'addcenter' => [
		'controller' => App\Controller\CenterController::class,
		'method' => 'add'
	],

	'addcentercheck' => [
		'controller' => App\Controller\CenterController::class,
		'method' => 'addCheck'
	],

	'editcenter' => [
		'controller' => App\Controller\CenterController::class,
		'method' => 'edit'
	],

	'editcenterinfo' => [
		'controller' => App\Controller\CenterController::class,
		'method' => 'editCenterInfo'
	],

	'editcenterpicture' => [
		'controller' => App\Controller\CenterController::class,
		'method' => 'editCenterPicture'
	],

	'deletecenter' => [
		'controller' => App\Controller\CenterController::class,
		'method' => 'deleteCenter'
	],

	


];

