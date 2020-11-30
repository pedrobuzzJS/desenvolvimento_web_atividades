<?php

    function listar($conn) {
        $sSql = 'select * from categorias';
        $stmt = $conn->prepare($sSql);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        ?>
        <div class="container">
            <table class="table table-striped">
                <tr>
                    <td>Código</td>
                    <td>Nome</td>
                    <td>Descrição</td>
                    <td>Ações</td>
                </tr>
        <?php
        if (count($resultado)) {

            foreach ($resultado as $linha) {
                echo '<tr>';
                echo '  <td>' . $linha['IDCategoria'] . '</td>';
                echo '  <td>' . $linha['NomeCategoria'] . '</td>';
                echo '  <td>' . $linha['Descricao'] . '</td>';
                echo '  <td>';
                echo '      <a href="#?acao=alterar&codigo='.$linha['IDCategoria'].'"> Alterar </a>';
                echo '      <a href="#?acao=excluir&codigo='.$linha['IDCategoria'].'"> Excluir </a>';
                echo '  <td>';
                echo '  </td>';
                echo '</tr>';
            }
        }
    }