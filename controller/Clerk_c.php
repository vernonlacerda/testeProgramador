<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Clerk_c
 *
 * @author Vernon
 */
class Clerk_c extends Controller {
    private $load;                  // variável para receber o objeto Load
    private $clerk;
    public function __construct() {
        parent::__construct();
        $this->load = parent::load();
        require_once ("views/template/clerkHeader_v.php");
        $this->clerk = $this->load->model("clerk_m");
    }
    
    public function hello (){
        return ("<p>Olá, usuário.<br>Classe Clerk_c construida com sucesso</p>");
    }
    
    public function main(){
       $this->load->view("clerks/main_v");
    }
    
    public function createClerk_v(){
        ($this->load->view("clerks/clerkcreate"));
    }        
    
    public function createClerk(){
        $data = $_POST;
        $create = $this->clerk->createclerk($data);
        if ($create)
            $this->load->view ("warnings/success_v");
    }
    
    public function createManager_v(){
        $this->load->view("clerks/managerCreate_v");
    }
    
    public function createManager(){
        $data = $_POST;
        $create = $this->clerk->createManager($data);
        if ($create)
           // $array = ($this->clerk->readLast('manager'));
            $this->load->view ("clerks/managerClerks_v");
    }
    
    public function managerClerk () {
        $data = $_POST;
        $keys = array_keys($data);
        //recarrega a própria string, mas convertida em string (quando carregada, é um array)
        $data['clerk'] = implode (";",$data['clerk']);
        
        $create = $this->clerk->createManagerClerk($data);
        if ($create)
            $this->load->view("warnings/success_v");
    }
    
   
            
}

?>
