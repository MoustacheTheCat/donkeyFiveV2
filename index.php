<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
session_start();
require_once('lib/autoload.php');
use DonkeyFive\Router\Router;
new Router();