
<?php
	require_once __DIR__ . "/../../../source/application/DefinePath.php";
	require_once APP_PATH . "/Connection.php";
	require_once APP_PATH . "/Default.php";
?>
<!DOCTYPE html>
<html>
<head>
	<?php require_once HTML_PATH . "/head.php"; ?>
</head>
<body>
	<?php require_once HTML_PATH . "/header.php"; ?>
	<main class="container">
		<h2>Cadastro do Restaurante</h2>
    <form class="form-control" role="form" method="post" action="valida-cadastro.php">

    	<div class="form-group">
    		<label for="name" class="col-sm-5 control-label">Nome do Restaurante</label>
    		<div class="col-sm-10">
    			<input type="text" class="form-control" id="name" name="name" placeholder="Nome do Restaurante" value="">
    		</div>
    	</div>

      <div class="form-group">
        <label for="cpf" class="col-sm-2 control-label">CNPJ/CPF</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="cpf" name="cpf" placeholder="CPF/CNPJ" value="">
        </div>
      </div>

      <div class="form-group">
        <label for="telefone" class="col-sm-2 control-label">Telefone</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="">
        </div>
      </div>

    	<div class="form-group">
    		<label for="email" class="col-sm-2 control-label">Email</label>
    		<div class="col-sm-10">
    			<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
    		</div>
    	</div>

      <div class="form-group">
    		<label for="ender" class="col-sm-2 control-label">Endereço</label>
    		<div class="col-sm-10">
    			<input type="ender" class="form-control" id="ender" name="ender" placeholder="Endereço" value="">
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
	</main>
</body>
</html>
