<?php
	$title = "CADASTRO DE RESTAURANTE";
?>
<div class="container">
	<h2>Cadastro do Restaurante</h2>
	<form class="form-control" role="form" method="post" action="valida-cadastro">

		<div class="form-group">
			<label for="name" class="col-sm-5 control-label">Nome do Restaurante</label>
			<div class="col-sm-10">
				<input type="text" required class="form-control" id="name" name="name" placeholder="Nome do Restaurante" value="">
			</div>
		</div>

		<div class="form-group">
		<label for="cpf" class="col-sm-2 control-label">CNPJ/CPF</label>
		<div class="col-sm-10">
		  <input type="text" required class="form-control" id="cpf" name="cpf" placeholder="CPF/CNPJ" value="">
		</div>
		</div>

		<div class="form-group">
		<label for="telefone" class="col-sm-2 control-label">Telefone</label>
		<div class="col-sm-10">
		  <input type="text" required class="form-control" id="telefone" name="telefone" placeholder="Telefone" value="">
		</div>
		</div>

		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
				<input type="email" required class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
			</div>
		</div>

		<div class="form-group">
			<label for="ender" class="col-sm-2 control-label">Endereço</label>
			<div class="col-sm-10">
				<input type="text" required class="form-control" id="ender" name="ender" placeholder="Endereço" value="">
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
