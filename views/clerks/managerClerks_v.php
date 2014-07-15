<div class="container marketing">
<h4>Escolha de Funcionários  </h4>
<p>
    Aqui o usuário definirá a equipe de funcionários que aquele gerente comandará.
</p>
<div class="row-fluid">
<form action="?a=clerk_c/managerClerk" method="post">
    <span class="label">Gerente</span>
            <select name="manager" class="selectpicker">
                
                <?php 
                    $c = new PDO ("mysql:host=localhost; dbname=mydb", "root", "");
               
                    $stmt = $c->prepare("SELECT * FROM manager");
                    $resultado = $stmt->execute();
    
                    if ($resultado === false){
                        $erro = $stmt->errorInfo();
                        throw new Exception($erro[2]);
                    }
                    else{
                     while ( $obj = $stmt->fetch ( PDO::FETCH_OBJ ) ) {
 
                      // Resultados podem ser recuperados atraves de seus atributos
                        echo "<option value= " . $obj->id . ">" . $obj->name . "</option>";
                    }
                    
		}
                
                ?>
            </select>
                <br>
                <span class="label label-info">Funcionários Disponíveis</span>
                
                <?php 
                    $c = new PDO ("mysql:host=localhost; dbname=mydb", "root", "");
               
                    $stmt = $c->prepare("SELECT id, name FROM clerk");
                    $resultado = $stmt->execute();
    
                    if ($resultado === false){
                        $erro = $stmt->errorInfo();
                        throw new Exception($erro[2]);
                    }
                    else{
                     while ( $obj = $stmt->fetch ( PDO::FETCH_OBJ ) ) {
 
                      // Resultados podem ser recuperados atraves de seus atributos
                        echo "<label></label><input type='checkbox' name='clerk[]' value= " . $obj->id . ">" . $obj->name;
                    }
                    
		}
                
                ?>
            <br>
           <button class="btn btn-small btn-success">Criar</button>
        </form>
    </div>
</div>