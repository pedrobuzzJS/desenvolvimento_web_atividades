<?php
    function formularioAlterar(){
        echo '<div class="col-8 col-sm-12">
                  <form method="post" action="">
                  <div class="form-group">
                    <label for="">Código</label>
                    <input type="number" class="form-control" name="codigo" id="codigo" placeholder="código">
                  </div>   
                  <div class="form-group">
                    <label for="">Categoria</label>
                    <input type="text" class="form-control" name="categoria" id="categoria" placeholder="código">
                  </div>    
                  <div class="form-group">
                  <input type="button" class="btn btn-success" name="cadastrar" value="Alterar">
                  </div>  
                </form>
                </div>';
    }
