<?php
    function formularioRegiaoCastro(){
        echo '<div class="col-8 col-sm-12">
                  <form method="post" action="index.php?pg=regiao">                
                  <div class="form-group">
                    <label for="regiao">Regiao</label>
                    <input type="text" class="form-control" name="regiao" id="regiao" placeholder="região">
                  </div>                
                  <div class="form-group">
                  <input type="submit" class="btn btn-success" name="cadastrar" value="Cadastar">
                  </div>  
                </form>
                </div>';
    }

    function cadastrarRegiao($conn) {
        if (isset($_POST['cadastrar'])) {
            try {
                $sSql = "SELECT IDRegiao 
                           FROM regiao
                          ORDER BY IDRegiao DESC
                          LIMIT 1;";

                $stmt = $conn->prepare($sSql);
                $stmt->execute();
                $aResult = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $uID = intval($aResult[0]['IDRegiao']) + 1;

                $sSql = ' INSERT INTO regiao (IDRegiao, DescricaoRegiao)
                          VALUES (:id, :nome)';

                $stmt = $conn->prepare($sSql);

                $stmt->execute([
                    ':id'        => $uID,
                    ':nome'      => $_POST['regiao']
                ]);

                header('Location: index.php?pg=regiao');

            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
    }