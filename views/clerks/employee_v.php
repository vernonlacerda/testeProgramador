
            <div class="container marketing">
                <h4>Empregados</h4>
                <div class="label label-info">
        <p>
            <br>
            Aqui será definido a equipe que trabalhará em determinado 
                    projeto.
        </p>
    </div>
                
                <div class="row-fluid">
                    <form action="?a=Projects_c/employee" method="post">
                        <label>Projeto <span class="label label-info">Organizado pela data de início</span></label>
                        <select name="project">
                             <?php 
                                $c = new PDO ("mysql:host=localhost; dbname=mydb", "root", "");
               
                                $stmt = $c->prepare("SELECT * FROM projects");
                                $resultado = $stmt->execute();
    
                                if ($resultado === false){
                                    $erro = $stmt->errorInfo();
                                    throw new Exception($erro[2]);
                                }
                                else{
                                    while ( $obj = $stmt->fetch ( PDO::FETCH_OBJ ) ) {
 
                                    // Resultados podem ser recuperados atraves de seus atributos
                                    echo "<option value= " . $obj->id . ">" . $obj->beggin . "</option>";
                                    }
                    
                		}
                
                ?>
                        </select><br>
                        <label class="label label-Primary ">Gerente</label>
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
                                    echo " <label><input type='checkbox' name='manager[]' value='" . $obj->id . "'>" . $obj->name ."</label>";
                                    }
                    
                		}
                
                            ?>
                        <br>
                        <label class="label label-warning">Funcionários</label>
                        <?php 
                                $c = new PDO ("mysql:host=localhost; dbname=mydb", "root", "");
               
                                $stmt = $c->prepare("SELECT * FROM clerk");
                                $resultado = $stmt->execute();
    
                                if ($resultado === false){
                                    $erro = $stmt->errorInfo();
                                    throw new Exception($erro[2]);
                                }
                                else{
                                    while ( $obj = $stmt->fetch ( PDO::FETCH_OBJ ) ) {
 
                                    // Resultados podem ser recuperados atraves de seus atributos
                                    echo "<label> <input type='checkbox' name='clerk[]' value='" . $obj->id . "'>" . $obj->name . "</label>";
                                    }
                    
                		}
                
                            ?><br>
                        <button class="btn btn-small btn-success">Cadastrar</button>
                    </form>
                </div>
            </div>