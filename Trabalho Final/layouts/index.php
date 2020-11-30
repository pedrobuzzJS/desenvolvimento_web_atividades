<?php

    require_once LAYOUTS . 'header.php';
    require_once LAYOUTS . 'menu.php';
    require_once LAYOUTS . 'footer.php';



    if (isset($_GET['regiao'])) {
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
    }