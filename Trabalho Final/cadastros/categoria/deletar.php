<?php
    function deletarCategoria ($conn) {
        try {
            $sSql = 'DELETE FROM categorias WHERE IDCategoria = :IDCAT';
            $stmt = $conn->prepare($sSql);

            $stmt->execute([
                ':IDCAT' => $_GET['codigo']
            ]);

            header('Location: index.php?pg=categoria');

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
