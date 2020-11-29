<?php
    $menus = [
            ['Produtos','produtos'],
            ['Regiao','regiao'],
            ['Categorias','categorias'],
            ['Transportadoras','transportadoras']
    ]
?>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Web</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Inical <span class="sr-only">(página atual)</span></a>
                </li>
                <?php
                    foreach ($menus as $linha) {
                        echo '<li class="nav-item">
                              <a href="?'. $linha[1] .'" class="nav-link">' .$linha[0].'</a>
                              </li>';
                    }
                ?>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="sair">Sair</button>
            </form>
        </div>
    </nav>