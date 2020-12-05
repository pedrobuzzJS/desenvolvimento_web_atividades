<?php
    function listar($conn) {
        $sSql = 'select IDTransportadora,
                            NomeConpanhia,
                            Telefone
                            from transportadoras;';
        $stmt = $conn->prepare($sSql);
        $stmt->execute();
        $resultado = $stmt->fetchAll(PDO::FETCH_NUM);
        ?>
        <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Código</th>
                <th>Companhia</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
            <?php
            if (count($resultado)) {

                foreach ($resultado as $linha) {
                    echo '<tr>';
                    foreach ($linha as $coluna) {
                        echo '<td>' . $coluna . '</td>';
                    }
                    echo '  <td>';
                    echo '      <a href="index.php?pg=categoria&acao=alterar&codigo='.$linha[0].'"> Alterar </a>';
                    echo '      <a href="index.php?pg=categoria&acao=excluir&codigo='.$linha[0].'"> Excluir </a>';
                    echo '  </td>';
                    echo '</tr>';
                }
            }
            ?>
        </table>
        <?php
    }