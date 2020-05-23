<?php

namespace App\Models;

use App\Db;
use App\Model;

class News extends Model{
    
    const TABLE = 'publications';

    public $title;
    public $date;  
    public $short_content;  
    public $content;    
    public $author_name;    
    public $preview;    
    public $type;

    
}
