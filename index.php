<?php

require_once __DIR__ . '/autoload.php';

use App\Models\User;
use App\Models\Foo;
use App\Models\News;

$foo = Foo::findbyField(array('Pablo'));
$currentUser = User::findbyField(array('2'));

$newsList = News::findLastLines('3');
include 'App/view.php';
