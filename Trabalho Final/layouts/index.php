<?php

    require_once LAYOUTS . 'header.php';
    require_once LAYOUTS . 'menu.php';
    echo '<div class="container">';


    /*if (isset($_GET['regiao'])) {
        require_once CADASTROS . 'regiao/index.php';
    } else {
        if (isset($_GET['produtos'])) {
            require_once CADASTROS . 'produtos/index.php';
        } else {
            if (isset($_GET['categorias'])) {
                require_once CADASTROS . 'categoria/index.php';
            } else {
                if (isset($_GET['transportadoras'])) {
                    require_once CADASTROS . 'transportadora/index.php';
                }
            }
        }
    }*/

    if (!isset($_GET['pg'])) {
        echo 'vai tomar no cu esse monte de merda q tem que terminar pra porra da terça';
    } else {
        require_once 'cadastros/' . $_GET['pg'] . '/index.php';
    }