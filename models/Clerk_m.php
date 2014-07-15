<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Clerk_m
 *
 * @author Vernon
 */

require ("Models.php");

class Clerk_m extends Model {
    private $db;
    private $load;
    
    function __construct() {
        parent::__construct();
        $this->load = parent::load();
     //   $this->hello();
        $this->db = parent::db();
    }

    public function hello(){
        echo "<p>classe Clerk_m construida com sucesso</p>";
    }
    
    public function createClerk($data){
        $keys = array_keys($data);
        
        $sql = "INSERT INTO clerk ("
            . $keys[1]. ", "
            . $keys[2] .", "
            . $keys[3] .","
            . $keys[4] .") 
            VALUES ('"
                . $data[$keys[1]] ."','"
                . $data[$keys[2]] ."','"
                . $data[$keys[3]] ."','"
                . $data[$keys[4]] ."');";
        
         $stmt = $this->db->prepare($sql);                
                 
        $resultado = $stmt->execute();
    
        if ($resultado === false){
                    $erro = $stmt->errorInfo();
                    throw new Exception($erro[2]);
		}
		else{
                    //return $resultado;
                    return true;
		}
        
    }
    
    public function createManager($data){
        $keys = array_keys($data);
        $sql = "INSERT INTO manager ("
            . $keys[1]. ", "
            . $keys[2] .", "
            . $keys[3] .","
            . $keys[4] .") 
            VALUES ('"
                . $data['name'] ."','"
                . $data['email'] ."','"
                . $data['username'] ."','"
                . $data['password'] ."');";
        
         $stmt = $this->db->prepare($sql);                
                 
        $resultado = $stmt->execute();
    
        if ($resultado === false){
                    $erro = $stmt->errorInfo();
                    throw new Exception($erro[2]);
		}
		else{
                    //return $resultado;
                    return true;
		}
        
    }
    public function createManagerClerk ($data) {
      
        $keys = array_keys($data);
      
        $sql = "INSERT INTO manages (". $keys[0]. ", ". $keys[1] .") 
            VALUES ('". $data[$keys[0]] ."','". $data[$keys[1]] ."')";
        
         $stmt = $this->db->prepare($sql);                
                 
        $resultado = $stmt->execute();
    
        if ($resultado === false){
                    $erro = $stmt->errorInfo();
                    throw new Exception($erro[2]);
		}
		else{
                    //return $resultado;
                    return true;
		}
         /* 
         */
    }

    public function read() {}
    
    public function readLast($table){
        $stmt = $this->db->prepare("SELECT * FROM $table");                


        $resultado = $stmt->execute();

        if ($resultado === false){
            $erro = $stmt->errorInfo();
            throw new Exception($erro[2]);
        }
        else{
            $obj = $stmt->fetch ( PDO::FETCH_ASSOC );
            return $obj;
        }
    
    }
    
    public function arrayToString ($array){        
        return implode ("; ", $data);
    }
    
} //EoC