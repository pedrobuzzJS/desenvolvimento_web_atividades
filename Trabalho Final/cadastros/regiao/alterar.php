<?php
    function formularioAlterar($arDados){
        echo '<div class="col-8 col-sm-12">
                      <form method="post" action="index.php?pg=regiao&acao=alterar&codigo='.$arDados[0].'">                
                          <div class="form-group">
                            <label for="regiaoAlt">Regiao</label>
                                <input type="text" class="form-control" name="regiaoAlt" id="regiaoAlt" value="'.$arDados[1].'" placeholder="Nome">
                          </div>                            
                          <div class="form-group">
                            <input type="submit" class="btn btn-success" name="alterar" value="Alterar">                                
                            <a href="index.php?pg=regiao" class="btn btn-danger">Desistir</a>
                          </div>  
                      </form>
                  </div>';
    }

    function alterarRegiao($conn) {
        try {
            $sSql = 'UPDATE regiao SET DescricaoRegiao = :regiao 
                         WHERE IDRegiao = :IDREG;';
            $stmt = $conn->prepare($sSql);
            $stmt->execute([
                ':IDREG' => $_GET['codigo'],
                ':regiao' => $_POST['regiaoAlt']
            ]);

            header('Location: index.php?pg=regiao');

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function catarCampos($conn) {
        try {
            $sSql = 'SELECT * FROM regiao WHERE IDRegiao = :IDREG';
            $stmt = $conn->prepare($sSql);
            $stmt->execute([
                ':IDREG' => $_GET['codigo'],
            ]);
            return ($stmt->fetchAll(PDO::FETCH_NUM));
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
