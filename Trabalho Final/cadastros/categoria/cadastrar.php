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
        if (isset($_POST['cadastrar'])) {
            try {
                $sSql = "SELECT IDCategoria 
                       FROM categorias
                      ORDER BY IDCategoria DESC
                      LIMIT 1;";

                $stmt = $conn->prepare($sSql);
                $stmt->execute();
                $aResult = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $uID = intval($aResult[0]['IDCategoria']) + 1;
                var_dump($uID);

                $sSql = ' INSERT INTO categorias (IDCategoria, NomeCategoria, Descricao, Figura)
                      VALUES (:id, :nome, :descricao, :figura)';

                $stmt = $conn->prepare($sSql);

                $stmt->execute([
                    ':id'        => $uID,
                    ':nome'      => $_POST['categoria'],
                    ':descricao' => $_POST['descricao'],
                    ':figura'    => $_POST['cadastrar']
                ]);


            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }

    cadastrarCategoria($conn);