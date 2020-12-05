<?php
function formularioTrasportadoraCastro(){
    echo '<div class="col-8 col-sm-12">
                  <form method="post" action="index.php?pg=transportadora">                
                  <div class="form-group">
                    <label for="companhia">Companhia</label>
                    <input type="text" class="form-control" name="companhia" id="companhia" placeholder="companhia">
                  </div>    
                  <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="telefone">
                  </div>             
                  <div class="form-group">
                  <input type="submit" class="btn btn-success" name="cadastrar" value="Cadastar">
                  </div>  
                </form>
                </div>';
}

function cadastrarTransportadora($conn) {
    if (isset($_POST['cadastrar'])) {
        try {
            $sSql = "SELECT IDTransportadora 
                           FROM transportadoras
                          ORDER BY IDTransportadora DESC
                          LIMIT 1;";

            $stmt = $conn->prepare($sSql);
            $stmt->execute();
            $aResult = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $uID = intval($aResult[0]['IDTransportadora']) + 1;

            $sSql = ' INSERT INTO transportadoras (IDTransportadora, NomeConpanhia, Telefone)
                          VALUES (:id, :companhia, :telefone)';

            $stmt = $conn->prepare($sSql);

            $stmt->execute([
                ':id'        => $uID,
                ':companhia'      => $_POST['companhia'],
                ':telefone'      => $_POST['telefone']
            ]);

            header('Location: index.php?pg=transportadora');

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}