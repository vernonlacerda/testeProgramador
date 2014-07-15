<?php

require_once ("controller/Home_c.php");

    $h = new Home_c();
    
    /*
     * essa verificação é feita apenas para evitar que a página inicial seja carregada
     * em branco por não conter uma action ($_GET['a'])
     */
   if (isset ($_GET['a'])) {
       $a = $_GET['a'];
       
   }
   else {
       $a = "Home_c/Main";
   }
   //chama o cabeçalho HTML da página (doctype, html, head
   $h->doctype();
   
   //carrega os controllers recebidos por referência através da action
   $h->menu($a);
   
   //carrega o rodapé HTML (/body, /html)
   $h->footer();
?>
