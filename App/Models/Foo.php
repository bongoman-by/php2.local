<?php

namespace App\Models;

use App\Db;
use App\Model;

class Foo extends Model{
    
    const TABLE = 'foo';
    const FIELD = 'name';   
    const SIGN = '=';

    public $name;
    
}