<?php

namespace App;

abstract class Model {
    const TABLE = '';
    const FIELD = '';   
    const SIGN = '';    

    
    public static function findAll() {
        $db = Db::instance();
        return $db->query(
                        'SELECT * FROM ' . static::TABLE, static::class);
    }   
    
    public static function findbyField(array $input_parameters = null) {
        $db = Db::instance();
        return $db->query(
                        'SELECT * FROM ' . static::TABLE . ' WHERE ' . static::FIELD . ' ' . static::SIGN . ' ?', static::class, $input_parameters)[0];
    }
    
    public static function findLastLines($limit) {
        $db = Db::instance();
        return $db->query(
                        'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $limit, static::class, null);
    }
    
  }
