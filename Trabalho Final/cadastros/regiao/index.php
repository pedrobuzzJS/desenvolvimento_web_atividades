<div class="justify-content-center mt-2">
    <div class="justify-content-center">
        <h1>Regiões</h1>
    </div>
    <div class="justify-content-center mt-2">
        <form method="post" action="">
            <label for="listar">Listar</label>
            <input type="button" name="listar" id="listar" value="Exibir regiões">
        </form>
    </div>
</div>
<div class="justify-content-center mt-2">

<?php
    require_once BIBLIOTECAS .  'conexao.php';
    require_once CADASTROS .    'regiao/listar.php';
    require_once CADASTROS .    'regiao/cadastrar.php';

    if (!isset($_POST['listar'])) {
        formularioCadastrar();
        listar($conn);
    }