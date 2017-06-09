<?php
  require_once APP_PATH . "/Connection.php";
  require_once APP_PATH . "/Default.php";

  class Pessoa {
    private $nome, $cpf, $telefone, $email, $ender;

    public function __construct() {

      $this->setNome();
      $this->setCpf();
      $this->setTelefone();
      $this->setEmail();
      $this->setEnder();

      //echo "noiado";
    }

    public function cadastro() {
        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "ProjetoRestaurante";

        $con = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
        $count = $con->exec("INSERT INTO
                          `Restaurante`(
                            `nome_restaurante`,
                            `CPF_CNPJ`,
                            `endereco`,
                            `telefone`,
                            `email`
                          )
                            VALUES(
                              '$this->nome',
                              '$this->cpf',
                              '$this->ender',
                              '$this->telefone',
                              '$this->email')") or die(print_r($con->errorInfo(), true));


        echo "Cadastro de $this->nome realizado com sucesso";
    }


    public function getNome(){
  		return $this->nome;
  	}

  	public function setNome(){
  		$this->nome = $_POST['name'];
  	}

  	public function getCpf(){
  		return $this->cpf;
  	}

  	public function setCpf(){
  		$this->cpf = $_POST['cpf'];
  	}

  	public function getTelefone(){
  		return $this->telefone;
  	}

  	public function setTelefone(){
  		$this->telefone = $_POST['telefone'];
  	}

  	public function getEmail(){
  		return $this->email;
  	}

  	public function setEmail(){
  		$this->email = $_POST['email'];
  	}

  	public function getEnder(){
  		return $this->ender;
  	}

  	public function setEnder(){
  		$this->ender = $_POST['ender'];
  	}

  }
