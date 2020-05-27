<?php

require_once __DIR__ . '/autoload.php';

use App\Models\User;
use App\Config;

$config = Config::instance();

$view = new \App\View();
$view->users = User::findAll(); 

echo $view->render(__DIR__  . '/App/templates/index.php');
