<?php

    function listar($conn) {
        $sSql = 'select IDProduto,
                        NomeProduto,
                        NomeCompanhia,
                        NomeCategoria,
                        QuantidadePorUnidade,
                        PrecoUnitario,
                        UnidadesEmEstoque,
                        UnidadesEmOrdem,
                        NivelDeReposicao,
                        Descontinuado
                    from produtos
                    join fornecedores f on f.IDFornecedor = produtos.IDFornecedor
                    join categorias c on c.IDCategoria = produtos.IDCategoria;';
        $stmt = $conn->prepare($sSql);
        $stmt->execute();
        $resultado = $stmt->fetchAll();
        ?>
        <div class="container">
            <table class="table table-striped">
                <tr>
                    <th>Código</th>
                    <th>Produto</th>
                    <th>Transportadora</th>
                    <th>Categoria</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Estoque</th>
                    <th>Ordem</th>
                    <th>Reposição</th>
                    <th>Descontinuado</th>
                    <th>Opções</th>
                </tr>
        <?php
        if (count($resultado)) {

            foreach ($resultado as $linha) {
                echo '<tr>';
                echo '  <td>' . $linha['IDProduto'] . '</td>';
                echo '  <td>' . $linha['NomeProduto'] . '</td>';
                echo '  <td>' . $linha['NomeCompanhia'] . '</td>';
                echo '  <td>' . $linha['NomeCategoria'] . '</td>';
                echo '  <td>' . $linha['QuantidadePorUnidade'] . '</td>';
                echo '  <td>' . $linha['PrecoUnitario'] . '</td>';
                echo '  <td>' . $linha['UnidadesEmEstoque'] . '</td>';
                echo '  <td>' . $linha['UnidadesEmOrdem'] . '</td>';
                echo '  <td>' . $linha['NivelDeReposicao'] . '</td>';
                echo '  <td>' . $linha['Descontinuado'] . '</td>';
                echo '  <td>';
                echo '      <a href="&acao=alterar&codigo='.$linha['IDProduto'].'"> Alterar </a>';
                echo '      <a href="&acao=excluir&codigo='.$linha['IDProduto'].'"> Excluir </a>';
                echo '  </td>';
                echo '</tr>';
            }
        }
    }