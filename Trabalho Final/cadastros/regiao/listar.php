<?php

    function listar($conn) {
        $sSql = 'select * from regiao';
        $stmt = $conn->prepare($sSql);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        ?>
        <div class="container">
        <table class="table table-striped">
            <tr>
                <td>Código</td>
                <td>Região</td>
                <td>Ações</td>
            </tr>
        <?php
        if (count($resultado)) {

            foreach ($resultado as $linha) {
                echo '<tr>';
                echo '  <td>' . $linha['IDRegiao'] . '</td>';
                echo '  <td>' . $linha['DescricaoRegiao'] . '</td>';
                echo '  <td>';
                echo '      <a href="#?acao=alterar&codigo='.$linha['IDRegiao'].'"> Alterar </a>';
                echo '      <a href="#?acao=excluir&codigo='.$linha['IDRegiao'].'"> Excluir </a>';
                echo '  <td>';
                echo '  </td>';
                echo '</tr>';
            }
        }
    }