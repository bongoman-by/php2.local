<?php

namespace App;

abstract class Model {
    const TABLE = '';
    const FIELD = '';   
    const SIGN = '';   
    
    public $id;

    public static function findAll() {
        $db = Db::instance();
        return $db->query(
                        'SELECT * FROM ' . static::TABLE, static::class);
    }   
    
    public static function findbyField(array $input_parameters = null) {
        $db = Db::instance();
        $result = $db->query(
                'SELECT * FROM ' . static::TABLE . ' WHERE ' . static::FIELD . ' ' . static::SIGN . ' ?', static::class, $input_parameters);
        if (null == $result) {
            return $result;
        }
        return $result[0];
    }

    public static function findLastLines($limit) {
        $db = Db::instance();
        return $db->query(
                        'SELECT * FROM ' . static::TABLE . ' ORDER BY id DESC LIMIT ' . $limit, static::class, null);
    }
    
    public function isNew() {
        
        return empty($this->id);   
        
    }
    
    public function insert()
    {
        if (!$this->isNew()) {
            return;
        }

        $columns = [];
        $values = [];
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }
            $columns[] = $k;
            $values[':'.$k] = $v;
        }

        $sql = '
INSERT INTO ' . static::TABLE . '
(' . implode(',', $columns) . ')
VALUES
(' . implode(',', array_keys($values)) . ')
        ';
        $db = Db::instance();
        $db->execute($sql, $values);
    }
    
    public function update($id)
    {
        if ($this->isNew()) {
            return;
        }

        $values = [];
        foreach ($this as $k => $v) {
            if ('id' == $k) {
                continue;
            }

            $values[] = $k . ' = ' . "'" . $v . "'";
        }

        $sql = 'UPDATE ' . static::TABLE . 
                ' SET ' . implode(', ', $values) . 
                ' WHERE id = ' . $id;

        $db = Db::instance();
        $db->execute($sql);
    }
    
    public function delete($id)
    {
        if ($this->isNew()) {
            return;
        }

        
        $sql = 'DELETE FROM ' . static::TABLE .
                ' WHERE id = ' . $id;

        $db = Db::instance();
        $db->execute($sql);
    }

}
