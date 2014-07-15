<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Controller
 *
 * @author Vernon
 */



class Model {
 //   private $load;
    function __construct() {
      
    }
    
    function hello() { echo "classe-pai Model construída com sucesso"; }
    function load () {
        require_once ("core/Load.php");
        return (new Load);
    }
    
    function db (){
        require_once ("core/database.php");
        return (new Database);
    }
    
    public function dateToHTML($dataSQL){
		list($a, $m, $d) = explode("-", $dataSQL);
		return "{$d}/{$m}/{$a}";
    }
	
    public function dateToSQL($dataHTML){
		list($d, $m, $a) = explode("/", $dataHTML);
		return "{$a}-{$m}-{$d}";
    }
    
    

}
