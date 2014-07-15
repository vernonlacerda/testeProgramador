<?php
require_once ("../template/projectsHeader_v.php");

?>

<section>
    <div>
        <form action="projectsValidation.php" method="post">
            <label>Descrição</label><br>
            <textarea name="description" placeholder="Digite a descrição de seu projeto aqui"></textarea><br>
            <input type="text" name="beggin" id="beggin" placeholder="Data de Início do Projeto"><br>
            <input type="text" name="finish" id="finish" placeholder="Data de Término do Projeto"><br>
            <button>Cadastrar</button>
        </form>
    </div>
</section>