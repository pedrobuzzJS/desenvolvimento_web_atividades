<div class="row justify-content-center mt-2">
    <div class="justify-content-center my-2">
        <h1>Transportadoras</h1>
    </div>
</div>
<div class="justify-content-center mt-2">

<?php
require_once BIBLIOTECAS . 'conexao.php';
require_once CADASTROS . 'transportadora/listar.php';
require_once CADASTROS . 'transportadora/cadastrar.php';
formularioTrasportadoraCastro();
listar($conn);
cadastrarTransportadora($conn);




if (isset($_GET['acao'])) {
    if ($_GET['acao'] == 'alterar') {
        require_once CADASTROS . 'transportadora/alterar.php';
        $arrDados = catarCampos($conn);
        formularioAlterar($arrDados[0]);
        alterarTransportadora($conn);
    } elseif (($_GET['acao'] == 'excluir')) {
        require_once CADASTROS . 'transportadora/deletar.php';
        deletarTrasnportadora($conn);
    }
}
