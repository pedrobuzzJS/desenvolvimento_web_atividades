<div class="row justify-content-center mt-2">
    <div class="justify-content-center my-2">
        <h1>Categorias</h1>
    </div>
</div>
<div class="justify-content-center mt-2">

<?php
    require_once BIBLIOTECAS . 'conexao.php';
    require_once CADASTROS . 'categoria/listar.php';
    listar($conn);
    if(!isset($_POST['cadastrar'])) {
        require_once CADASTROS . 'categoria/cadastrar.php';
        formularioCategoriaCastro();
        cadastrarCategoria($conn);
        var_dump($_POST);
    }



    if (isset($_GET['acao'])) {
        if ($_GET['acao'] == 'alterar') {
            require_once CADASTROS . 'categoria/alterar.php';
            formularioAlterar();
        }
    }
