<?php

function my_autoloader($class) {

    $filename = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($filename)) {
        include_once $filename;
    }
}

spl_autoload_register('my_autoloader');

spl_autoload_register(function ($class) {

    $filename = __DIR__ . '/' . str_replace(['\\', 'App'], ['/', 'lib'], $class) . '.php';
    if (file_exists($filename)) {
        include_once $filename;
    }
});

include __DIR__ . '/vendor/autoload.php';


