<?php
    function formularioCadastrar(){
       echo '<form method="post" action="">
          <div class="form-group">
            <label for="">Código</label>
            <input type="number" class="form-control" id="" placeholder="código">
          </div>   
          <div class="form-group">
            <label for="">Região</label>
            <input type="text" class="form-control" id="" placeholder="código">
          </div>       
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Exemplo de textarea</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </form>';
    }