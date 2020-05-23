<?php

namespace App;

class Config
{
    public $data = array(
        "DB_host" => "localhost",
        "DB_user_name" => "root",
        "DB_user_password" => "admin",
        "DB_driver" => "mysql",
        "DB_database" => "php2local"
    );
    
    protected static $instance;

    protected function __construct()
    {
    }

    public static function instance()
    {
        if (null === static::$instance) {
            static::$instance = new static;
        }
        return static::$instance;
    }

}