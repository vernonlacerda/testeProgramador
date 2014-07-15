<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Projects
 *
 * @author Vernon
 */
require ("Models.php");

class Projects_m extends Model {
    private $db;
    private $load;
    
    function __construct() {
        parent::__construct();
        $this->load = parent::load();
        $this->db = parent::db();
    }
    
    public function createProjects($data) {
         $keys = array_keys($data);
        $sql = "INSERT INTO projects ("
            . $keys[0]. ", "
            . $keys[1] .", "
            . $keys[2] .") 
            VALUES ('"
                . $data[$keys[0]] ."','"
                . parent::dateToSQL($data[$keys[1]]) ."','"
                . parent::dateToSQL($data[$keys[2]]) ."');";
        
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
    
    /*
     * Método que trata e insere os dados na tabela employee (empregados).
     * A primeira verificação é feita pois, como não é obrigatório que haja 
     * determinada categoria de funcionario (funcionário ou gerente), o campo
     * da tabela é carregado pelo array ($data carrega os índices correspondentes).
     * Dessa forma, caso não tenha sido passado algum valor nestes, ele carregará
     * um valor nulo.
     * 
     */
    public function employee($data){
         $keys = array_keys($data);
       //    var_dump ($data);
              
           
           if (!isset($data['manager']))
               $data['manager'] = null;
           if (!isset($data['clerk']))
               $data['clerk'] = null;
            $keys = array_keys($data);
      
            $sql = "INSERT INTO employee (". $keys[0]. ", ". $keys[1] .", ". $keys[2] .") 
            VALUES ('". $data[$keys[0]] ."','". $data[$keys[1]] ."','". $data[$keys[2]] ."');";
        
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
          /* */
    }
    /*
     * Método responsável pela exibição dos dados da tabela.
     * 
     * obs: FETCH_ASSOC - retorna um array com os dados obtidos.
     */
    public function read(){
        $sql = "SELECT * FROM projects";
          $stmt = $this->db->prepare($sql);    
        $resultado = $stmt->execute();
        
        if ($resultado === false){
                    $erro = $stmt->errorInfo();
                    throw new Exception($erro[2]);
	}
	else{
             while ( $obj = $stmt->fetch ( PDO::FETCH_ASSOC ) ) {
                           
                    $array[] = $obj;
                    }
             if (isset($array))
                 return $array;
             else return false;
	}
    }
    
    /*
     *  método que retorna todos os empregados que estão em determinado projeto
     * Neste teste não seria necessário nomea-lo por id, mas, em versões futuras
     * pode-se listar apenas os empregados que estão trabalhando (uma vez que 
     * apenas existem empregados se estiverem alocados em algum projeto)
     */
    public function readEmployeeById($projectId) {
        
        $sql = "SELECT * FROM employee WHERE id = $projectId";
          $stmt = $this->db->prepare($sql);    
        $resultado = $stmt->execute();
        
        if ($resultado === false){
                    $erro = $stmt->errorInfo();
                    throw new Exception($erro[2]);
	}
	else{
            return true;
	}
    }
}

?>
