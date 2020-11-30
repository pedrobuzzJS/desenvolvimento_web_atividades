<?php

    function listar($conn) {
        $sSql = 'select * from transportadoras';
        $stmt = $conn->prepare($sSql);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        ?>
        <div class="container">
            <table class="table table-striped">
                <tr>
                    <td>Código</td>
                    <td>Companhia</td>
                    <td>Telefone</td>
                    <td>Ações</td>
                </tr>
        <?php
        if (count($resultado)) {

            foreach ($resultado as $linha) {
                echo '<tr>';
                echo '  <td>' . $linha['IDTransportadora'] . '</td>';
                echo '  <td>' . $linha['NomeConpanhia'] . '</td>';
                echo '  <td>' . $linha['Telefone'] . '</td>';
                echo '  <td>';
                echo '      <a href="#?acao=alterar&codigo='.$linha['IDTransportadora'].'"> Alterar </a>';
                echo '      <a href="#?acao=excluir&codigo='.$linha['IDTransportadora'].'"> Excluir </a>';
                echo '  <td>';
                echo '  </td>';
                echo '</tr>';
            }
        }
    }