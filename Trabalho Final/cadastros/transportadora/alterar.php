<?php
function formularioAlterar($arDados){
    echo '<div class="col-8 col-sm-12">
                  <form method="post" action="index.php?pg=transportadora&acao=alterar&codigo='.$arDados[0].'">                
                      <div class="form-group">
                        <label for="conpanhia">Conpanhia</label>
                            <input type="text" class="form-control" name="conpanhia" id="conpanhia" value="'.$arDados[1].'" placeholder="conpanhia">
                      </div>  
                      <div class="form-group">
                        <label for="telefone">Telefone</label>
                            <input type="text" class="form-control" name="telefone" id="telefone" value="'.$arDados[2].'" placeholder="telefone">
                      </div>  
                      <div class="form-group">
                        <input type="submit" class="btn btn-success" name="alterar" value="Alterar">                                
                        <a href="index.php?pg=categoria" class="btn btn-danger">Desistir</a>
                      </div>  
                  </form>
              </div>';
}

function alterarTransportadora($conn) {
    try {
        $sSql = 'UPDATE transportadoras SET NomeConpanhia = :conpanhia, Telefone = :telefone 
                     WHERE IDTransportadora = :IDTRANS;';
        $stmt = $conn->prepare($sSql);
        $stmt->execute([
            ':IDTRANS' => $_GET['codigo'],
            ':conpanhia' => $_POST['conpanhia'],
            ':telefone' => $_POST['telefone'],
        ]);

        header('Location: index.php?pg=transportadora');

    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}

function catarCampos($conn) {
    try {
        $sSql = 'SELECT * FROM transportadoras WHERE IDTransportadora = :IDTRANS';
        $stmt = $conn->prepare($sSql);
        $stmt->execute([
            ':IDTRANS' => $_GET['codigo'],
        ]);
        return ($stmt->fetchAll(PDO::FETCH_NUM));
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
