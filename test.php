<?php

require __DIR__ . '/autoload.php';

$a = new \App\Collection();

$a[] = 1;

$a[11] = 11;
$a[2] = 234;

foreach ($a as $key => $value) {
    echo $value;
    
}