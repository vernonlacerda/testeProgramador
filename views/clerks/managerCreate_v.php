<div class="container marketing">
<div class="label label-info">
        <p>
            <br>
                Aqui são cadastrados os gerentes
        </p>
    </div>
    <div class="row-fluid">

<Form action="?a=clerk_c/createManager" method="post">
    <h3>Cadastro de Gerentes</h3>
    <input type='hidden' name="type" value="manager">
    <label></label>
    <input type="text" name="name" value="" placeholder="Nome do Gerente"><br>
    <label></label>
    <input type="text" name="email" value="" placeholder="Endereço Eletrônico"><br>
    <label></label>
    <input type="text" name="username" value="" placeholder="Nome de Usuário"><br>
    <label></label>
    <input type="password" name="password" value="" placeholder="Senha de Acesso"><br>
    <button class="btn btn-small btn-success">Cadastrar</button>
</Form>
    </div>
    </div>