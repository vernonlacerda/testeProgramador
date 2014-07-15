<?php

require_once ("controller.php");

/*
 * 
 * @description:
 * Ao se extender a classe Controller, herda-se uma série de métodos já implementados
 * na classe-pai. Posteriormente, pode-se usar esta herança como definição da classe
 * como tipo Controller.
 */
class Home_c  extends Controller {
    
    private $template;          #receberá as definições de view da Template
    private $load;              #receberá os métodos de carregamento do objeto Load recebido no construtor.
    
    function __construct() {
        #carga dos métodos da classe pai
        parent::__construct();
        #carga do objeto Load, recebido através do método load da classe-pai
        $this->load = parent::load();        
        
        #chama-se o arquivo view Template_v
        $this->load->view ("Template_v");
        
        #instancia-se a classe Template_v no atributo template afim de se usar seus métodos
        $this->template = $this->load->_class("Template_v");
        
    }
    //método inicial
    public function main(){        
        $this->load->view ('template/header_v');
       $this->load->view ("Main_v");
    }

    //método responsável por montar a tela das views.
    public function menu($menu = null) {
        if (!$menu)
            $menu = "Home_c/hello";
       // print $menu;
        return ($this->load($menu));
    }
    
    //método responsável pela carga do cabeçalho HTML das páginas (doctype, html, head)
    public function doctype() {
        return $this->template->doctype();
        
    }
    
    //método responsável pela carga do rodapé HTML das páginas (body, html)
    public function footer() {
        return $this->template->footer();
    }
    
    /*
     * Este método carrega o objeto e o método enviado pelo link.
     * 
     * sintaxe: index.php?a=objeto->método
     * 
     * 
     */
    public function load($object) {
     //transforma
        $aux = explode("/",$object);
     
        require_once ("controller/".$aux[0].".php");        
        $obj = new $aux[0];
        
        
        $aux2 = $aux[1];
        return $obj->$aux2();
        
        
     
    }
}

?>
