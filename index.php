<?php

require_once __DIR__ . '/autoload.php';

use App\Models\User;
use App\Models\Foo;
use App\Models\News;
use App\Config;

$config = Config::instance();

$newsList = News::findLastLines('3');
include 'App/view.php';
