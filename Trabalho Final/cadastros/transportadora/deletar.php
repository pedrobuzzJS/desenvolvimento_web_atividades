<?php
    function deletarTrasnportadora ($conn) {
        try {
            $sSql = 'DELETE FROM transportadoras WHERE IDTransportadora = :IDTRANS';
            $stmt = $conn->prepare($sSql);

            $stmt->execute([
                ':IDTRANS' => $_GET['codigo']
            ]);

            header('Location: index.php?pg=transportadora');

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
