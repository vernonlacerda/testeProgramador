<?php


class Controller {

    function __construct() {
      
    }
    
    function load () {
        require_once ("core/Load.php");
        return (new Load);
    }
    
}
