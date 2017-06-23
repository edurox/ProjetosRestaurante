<?php
	$title = "CADASTRO DE CARDAPIO";
?>
<div class="container">
	<h2>Cadastro do Cardapio</h2>
	<form class="form-control" role="form" method="post" action="valida-cardapio">

    <div class="form-group">
      <label for="name" class="col-sm-5 control-label">Nome da empresa</label>
      <div class="col-sm-10">

      <?php
          require_once APP_PATH . '/Restaurante.php';
          $restauranteObj = new Restaurante();
          $restaurantes = $restauranteObj->getAll();

          echo "<select name='restid' id='restid'>";
          foreach($restaurantes as $key => $row)
          {
             echo "<option value = '".$row[id_restaurante]."'>".$row[nome_restaurante]."</option>";
          }
          echo "</select>";
      ?>
      </div>
    </div>

    <div class="form-control">
  		<div class="form-group">
  			<label for="name" class="col-sm-5 control-label">Produto da Promoção Principal</label>
  			<div class="col-sm-10">
  				<input type="text" required class="form-control" id="prodpromo" name="prodpromo" placeholder="Produto" value="">
  			</div>
  		</div>

  		<div class="form-group">
  		<label for="cpf" class="col-sm-2 control-label">Preço</label>
  		<div class="col-sm-10">
  		  <input type="number" required class="form-control" id="preco1" name="preco1" placeholder="0,00" value="">
  		</div>
  		</div>
    </div>

		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<input id="submit" name="submit" type="submit" value="Enviar" class="btn btn-primary">
			</div>
		</div>

		<div class="form-group">
			<div class="col-sm-10 col-sm-offset-2">
				<! Will be used to display an alert to the user>
			</div>
		</div>
	</form>
</div>
