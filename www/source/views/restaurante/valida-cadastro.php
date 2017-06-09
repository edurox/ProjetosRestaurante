<?php
require_once APP_PATH . "/Pessoa.php";

$pessoa = new Pessoa();
$pessoa->cadastro();

// Redireciona para algum lugar
echo "<script>alert('Cadastro realizado com sucesso!')</script>";
echo "<script>window.location = '".SITE_URL."';</script>";
