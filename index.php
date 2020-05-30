<?php

require_once __DIR__ . '/autoload.php';

use App\Models\User;
use App\Config;

$config = Config::instance();

$views = new \App\Views();
$views->users = User::findAll(); 

try {
  echo $views->display(__DIR__  . '/App/templates/index.php');
  
} catch (App\Exceptions\Core $exc) {
    echo $exc->getMessage();
}catch (App\Exceptions\Db $exc) {
    echo $exc->getMessage();
}


