<?php
    function formularioCategoriaCastro(){
        echo '<div class="col-8 col-sm-12">
              <form method="post" action="index.php?pg=categoria">                
              <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" name="categoria" id="categoria" placeholder="Nome">
              </div>  
              <div class="form-group">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" name="descricao" id="descricao" placeholder="descricao">
              </div>  
              <div class="form-group">
              <input type="submit" class="btn btn-success" name="cadastrar" value="Cadastar">
              </div>  
            </form>
            </div>';
    }

    function cadastrarCategoria($conn) {
        try {
            $sSqlID = 'select IDCategoria
                        from categorias
                        order by IDCategoria
                        desc limit 1;';
            $stmt = $conn->prepare($sSqlID);
            $stmt->execute();
            $vet = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $iID = intval($vet[0]['IDCategoria']) + 1;
            var_dump($_POST);

            $sSql = 'insert into categorias(IDCategoria, NomeCategoria, Descricao,Figura) 
                     values (:id,:nome,:descricao,:figura);';
            $stmt = $conn->prepare($sSql);
            $stmt->execute(var_dump(array(
                ':id' => $iID,
                ':nome' => $_POST['categoria'],
                ':descricao' => $_POST['descricao'],
                ':figura' => 'vai ser foder merda'
            )));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }