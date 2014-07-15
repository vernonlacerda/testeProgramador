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
class Projects_c extends Controller{
    private $load;
    private $template;
    private $projects;

    public function __construct() {
        parent::__construct();
        $this->load = parent::load();
        $this->load->view ("Template_v");
        require_once ("views/template/projectsHeader_v.php");
        
        $this->projects = $this->load->model("Projects_m");
        $this->template = new Template_v();
    }
    
    public function hello (){
        
    }
    
    public function main(){
         $this->read();
    }
    
    public function createProjects_v(){
        $this->load->view ("projects/createProjects_v");
    }
    
    public function createProjects(){
        $data = $_POST;
        $create = $this->projects->createProjects($data);
        if ($create)
           // $array = ($this->clerk->readLast('manager'));
            $this->load->view ("warnings/success_v");
    }
    
     public function employee_v() {
        $this->load->view("clerks/employee_v");
    }
    
    public function employee() {
         $data = $_POST;
         if (isset( $data['manager']))
            $data['manager']  = implode (";",$data['manager']);
         if(isset ( $data['clerk']))
        
        $data['clerk']  = implode (";",$data['clerk']);
        
         $create = $this->projects->employee($data);
        
        if ($create)
           
            $this->load->view ("warnings/success_v");
    }
    
    public function read(){
         
        $read = $this->projects->read();
        if ($read==false) {
            $this->load->view("warnings/emptyTable_v");
        }
        else {
            $this->template->main_table($read);
        }
        
    }
            
}

?>
