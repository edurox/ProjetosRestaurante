<?php
  require_once __DIR__ . "/../../../source/application/DefinePath.php";
  require_once APP_PATH . "/Connection.php";
  require_once APP_PATH . "/Default.php";
  require_once "Pessoa.php";


  $Pessoa = new Pessoa();
  //echo "Pedaço de merda";

  $Pessoa->cadastro();

?>
