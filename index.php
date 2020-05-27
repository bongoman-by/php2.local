<?php

require_once __DIR__ . '/autoload.php';

use App\Models\User;
use App\Config;

$config = Config::instance();

$views = new \App\Views();
$views->users = User::findAll(); 

echo $views->render(__DIR__  . '/App/templates/index.php');
