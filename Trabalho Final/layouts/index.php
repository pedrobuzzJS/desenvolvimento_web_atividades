<?php

    require_once LAYOUTS . 'header.php';


    if (isset($_GET['logado'])) {
        require_once LAYOUTS . 'login.php';
    } else {
        require_once LAYOUTS . 'menu.php';
        echo '<div class="container">';
        require_once 'cadastros/' . $_GET['pg'] . '/index.php';
    }