<div class="row justify-content-center mt-2">
    <div class="justify-content-center my-2">
        <h1>Categorias</h1>
    </div>

<?php
    require_once BIBLIOTECAS . 'conexao.php';
    require_once CADASTROS . 'categoria/listar.php';
    listar($conn);
