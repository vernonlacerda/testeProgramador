<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Load
 *
 * @author Vernon
 */
class Load {
    
    public function view ($view) {
        return (require_once ("views/".$view.".php"));   
    }
    
    public function controller ($controller) {
         require_once ("controller/".$controller.".php");
         return (new $controller);
    }
    
    public function model ($model) {
        require_once ("models/".$model.".php");
        
        return (new $model);
    }
    
    public function file($place,$file){
        return (require_once ($place."/".$file));
    }
    
    public function _class($class) {
        $this->file("views", 'Template_v.php');
        return (new Template_v);
    }
    
    
    
}

?>
