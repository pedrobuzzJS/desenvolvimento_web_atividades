<div class="row justify-content-center mt-2">
    <div class="justify-content-center my-2">
        <h1>Categorias</h1>
    </div>
</div>
<div class="justify-content-center mt-2">

<?php
require_once BIBLIOTECAS . 'conexao.php';
require_once CADASTROS . 'regiao/listar.php';
require_once CADASTROS . 'regiao/cadastrar.php';
formularioRegiaoCastro();
listar($conn);
cadastrarRegiao($conn);




if (isset($_GET['acao'])) {
    if ($_GET['acao'] == 'alterar') {
        require_once CADASTROS . 'regiao/alterar.php';
        $arrDados = catarCampos($conn);
        formularioAlterar($arrDados[0]);
        alterarRegiao($conn);
        var_dump($_POST);
    } elseif (($_GET['acao'] == 'excluir')) {
        require_once CADASTROS . 'regiao/deletar.php';
        deletarRegiao($conn);
    }
}
