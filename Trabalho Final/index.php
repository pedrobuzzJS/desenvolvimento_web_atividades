<?php

    session_start();
    ob_start();
;
    if (isset($_POST['sair'])) {
        session_destroy();
        session_start();
    }

    require_once(__DIR__ . "/bibliotecas/parametros.php");
    require_once BIBLIOTECAS .  'parametros.php';
    require_once BIBLIOTECAS .  'conexao.php';
    require_once LAYOUTS .      'index.php';