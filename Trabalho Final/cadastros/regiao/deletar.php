<?php
    function deletarRegiao ($conn) {
        try {
            $sSql = 'DELETE FROM regiao WHERE IDRegiao = :IDREG';
            $stmt = $conn->prepare($sSql);

            $stmt->execute([
                ':IDREG' => $_GET['codigo']
            ]);

            header('Location: index.php?pg=regiao');

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
