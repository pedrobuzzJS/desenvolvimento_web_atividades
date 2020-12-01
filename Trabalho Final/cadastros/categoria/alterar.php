<?php
    function formularioAlterar($arDados){
        echo '<div class="col-8 col-sm-12">
                  <form method="post" action="index.php?pg=categoria&acao=alterar&codigo='.$arDados[0].'">                
                      <div class="form-group">
                        <label for="categoriaAlt">Categoria</label>
                            <input type="text" class="form-control" name="categoriaAlt" id="categoriaAlt" value="'.$arDados[1].'" placeholder="Nome">
                      </div>  
                      <div class="form-group">
                        <label for="descricaoAlt">Descrição</label>
                            <input type="text" class="form-control" name="descricaoAlt" id="descricaoAlt" value="'.$arDados[2].'" placeholder="descricao">
                      </div>  
                      <div class="form-group">
                        <input type="submit" class="btn btn-success" name="alterar" value="Alterar">                                
                        <a href="index.php?pg=categoria" class="btn btn-danger">Desistir</a>
                      </div>  
                  </form>
              </div>';
    }

    function alterarCategoria($conn) {
        try {
            $sSql = 'UPDATE categorias SET NomeCategoria = :nome, Descricao = :descricao 
                     WHERE IDCategoria = :CDCAT;';
            $stmt = $conn->prepare($sSql);
            $stmt->execute([
                ':CDCAT' => $_GET['codigo'],
                ':nome' => $_POST['categoriaAlt'],
                ':descricao' => $_POST['descricaoAlt'],
            ]);

            header('Location: index.php?pg=categoria');

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function catarCampos($conn) {
        try {
            $sSql = 'SELECT * FROM categorias WHERE IDCategoria = :IDCAT';
            $stmt = $conn->prepare($sSql);
            $stmt->execute([
                ':IDCAT' => $_GET['codigo'],
            ]);
            return ($stmt->fetchAll(PDO::FETCH_NUM));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
