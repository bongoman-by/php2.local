<?php

namespace App;

use App\Config;

class Db {
    
    use Singleton;

    protected $dbh;
        
    protected function __construct() {
        
        $dbconfig = Config::instance()->data;

        $this->dbh = new \PDO($dbconfig['DB_driver'] . ':host=' . $dbconfig['DB_host'] . ';dbname=' . $dbconfig['DB_database'], $dbconfig['DB_user_name'], $dbconfig['DB_user_password']);
    }

    public function execute($sql, array $input_parameters = null) {
        
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($input_parameters);
        return $res;
    }
    
    public function query($sql, $class, array $input_parameters = null) {
        
        $sth = $this->dbh->prepare($sql);
        if (null !== $input_parameters) {
            $res = $sth->execute($input_parameters);

        } else {
            $res = $sth->execute();
        }
        
        if (FALSE !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class); 
        }
        return [];
    }

}
