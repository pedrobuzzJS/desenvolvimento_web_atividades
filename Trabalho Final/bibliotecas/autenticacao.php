<?php
    $sSql = 'SELECT * from usuario
             WHERE Email = :email and 
             Senha  = md5(:senha)';
    $stmt = $conn->prepare($sSql);

    $stmt->bindParam(':email', $_POST['email']);
    $stmt->bindParam(':senha', $_POST['senha']);

    $stmt->execute();

    $result = $stmt->fetchAll();

    if (isset($_POST['entrar'])) {
        if ($result != null) {
            $_SESSION['logado'] = true;
        } else {
            $_SESSION['errologin'] = true;
        }
    }