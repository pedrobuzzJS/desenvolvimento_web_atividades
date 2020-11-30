<div class="row justify-content-center mt-2">
    <div class="justify-content-center my-2">
        <h1>Regiões</h1>
    </div>



<?php
    require_once BIBLIOTECAS . 'conexao.php';
    require_once CADASTROS . 'regiao/listar.php';
    listar($conn);