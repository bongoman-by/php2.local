<?php

require __DIR__ . '/autoload.php';

use App\Models\User;
use App\Models\Foo;
use App\Singleton;


$foo = Foo::findbyField(array('Pablo'));
$currentUser = User::findbyField(array('2'));


function sendEmail(\App\Models\HasEmail $user, string $message = '') {
    echo 'Почта уходит на ' . $user->email;
}

sendEmail($currentUser);

$single = \App\Db::instance();

var_dump($single);