<?php

   function tabela() {
        try {
            $sSql = "SELECT IDRegiao as 'Código',
                        DescricaoRegiao as 'Nome'
                   FROM regiao";
            $stmt = $conn->prepare($sSql);
            $stmt->execute();
            $resultado = $stmt->fetchAll(PDO::FETCH_NUM);
            $cabeca = [
                'Código',
                'Região'
            ];
        } catch (PDOException $e) {
            echo $e;
        }
        ?>
            <form method="post" action="">
            <table class="table table-striped">
            <tr>
                <td>Código</td>
                <td>Região</td>
                <td>Ação</td>
            </tr>>


        <?php
       if(count($resultado)) {
           foreach ($resultado as $linha) {
               echo '<tr>';
               echo '<td>'.$linha['IDRegiao'].'</td';
               echo '<td>'.$linha['DescricaoRegiao'].'</td';
               echo '<td><a href="listar.php"></a></td>';
               echo '</tr>';
           }
       }
       ?>
            </table>
            </form>
       <?php
   }