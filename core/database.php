<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of database
 *
 * @author Vernon
 */
class Database{
    protected $data;
    
    //$c = new PDO ("mysql:host=localhost; dbname=mydb", "root", "");
    function __construct() {
        $this->data['driver']   = 'mysql';
        $this->data['host']     = "localhost";
        $this->data['dbname']   = 'mydb';
        $this->data['username'] = 'root';
        $this->data['password'] = '';
    }
    
    public function connection () {
        $db = new PDO ($this->data['driver'] .":host=". $this->data['host'] ."; dbname=". $this->data['dbname'], $this->data['username'], $this->data['password']);
        #$db = new PDO ("mysql:". $this->data['host'] . "; ", "dbname= ". $this->data['dbname'] , $this->data['username'] , "'". $this->data['password']"'");
        return $db;
    }
    
    public function prepare ($sql) {
        return ($this->connection()->prepare($sql));                //$stmt = $c->prepare($sql);
    }

}

?>
