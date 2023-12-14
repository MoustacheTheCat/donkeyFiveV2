<?php
ini_set('display_errors', 'On');
ini_set('upload_tmp_dir','/temp');
error_reporting(E_ALL);
session_start();
require_once('lib/autoload.php');
use DonkeyFive\Router\Router;
new Router();