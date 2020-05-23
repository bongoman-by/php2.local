<?php

define('MODELS',$_SERVER['DOCUMENT_ROOT'].'/App/models/');
function my_autoloader($class) {

    include_once __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
}

spl_autoload_register('my_autoloader');



