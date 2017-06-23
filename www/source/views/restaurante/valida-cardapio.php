<?php
require_once APP_PATH . "/CardapioCadastro.php";

$Restaurante = new CardapioCadastro();
$Restaurante->cadastro();

// Redireciona para algum lugar
echo "<script>alert('Cadastro realizado com sucesso!')</script>";
echo "<script>window.location = '".SITE_URL."';</script>";
