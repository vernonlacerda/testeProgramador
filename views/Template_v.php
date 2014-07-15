<?php 
    class Template_v {
        public $header;
        public $main_content;
        public $footer;
        public $title;
        
        function __construct() {
            echo '<div class="container marketing">

<div class="row-fluid">
';
        }
        
        function __destruct() {
            return (print'</div>
                </div>');
        }

        

        public function title($title){
            $this->title = $title; 
        }

        public function doctype () {
            require_once ("views/Template/Doctype_v.php");
           
        }
        
        

        /*
         * Este método monta a tabela de saída de dados para exibição.
         * Sintaxe: main_table (array)
         * Keys = dados obtidos após extração dos índices do array. Porém,
         * como trata-se de um array dentro de outro, pegou-se a primeira
         * posição do array principal e extraiu-se os dados deste.
         * $data = conteúdo obtido da página de controle.
         * $buffer = string para renderização (exibição) pelo navegador
         * 
         * A primeira rotina verifica se a tabela está sendo enviada com 
         * uma legenda, isto é, com um título que será apresentado no
         * cabeçalho da tabela.
         * Caso exista, ele trata-o, exibe e depois exclui aquele valor 
         * do array, tanto das keys quanto do conteúdo.
         */
        public function main_table($data){
           echo "<h3>Dados obtidos</h3>";
            $buffer = null;
            for ($i=0; $i<(count($data)); $i++){
              $table[$i] = $data[$i];
          }
          $keys = array_keys ($table[0]);
         
            $buffer .= "<p><table border='1'>\n";
            
            $buffer .= "<tr>\n";
            
            foreach ($keys as $r) {
                
                    $buffer .= "<th>". $r ."</th>";
               /// $buffer .= "<th>". $r ."</th>";
            }
            $buffer .= "</tr>\n";
              for ($i=0; $i<(count($data)); $i++){
             
          
            foreach ( $table[$i] as $r) {
                
                    $buffer .= "<td>". $r ."</td>";
            }
            $buffer .= "</tr>\n";
              }
            $buffer .= "</table></p>";
             (print ($buffer));
        }
        
        public function footer(){
           require_once ("views/Template/Footer_v.php");
        }
        
        
        
        
    }

