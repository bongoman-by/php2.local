<?php

namespace App;

class Db {

    protected $dbh;
    private $DB_host = "localhost";
    private $DB_user_name = "root";
    private $DB_user_password = "admin";
    private $DB_driver = "mysql";
    private $DB_database = "php2local";

    public function __construct() {

        $this->dbh = new \PDO($this->DB_driver . ':host=' . $this->DB_host . ';dbname=' . $this->DB_database, $this->DB_user_name, $this->DB_user_password);
    }

    public function execute($sql) {
        
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
    }
    
    public function query($sql) {
        
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        if (FALSE !== $res) {
            return $sth->fetchAll(); 
        }
        return [];
    }

}
