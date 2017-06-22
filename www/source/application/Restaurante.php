<?php
  require_once APP_PATH . "/Database.php";
  require_once APP_PATH . "/Default.php";

  class Restaurante {
    private $nome, $cpf, $telefone, $email, $ender;
    private $con;

    public function __construct() {
        $this->setNome();
        $this->setCpf();
        $this->setTelefone();
        $this->setEmail();
        $this->setEnder();

        $database = new Database();
        $this->con = $database->connect();
    }

    public function cadastro() {
        $count = $this->con->exec("INSERT INTO
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

    public function getAll() {
        $select = "SELECT * FROM Restaurante";

        foreach( $this->con->query($select) as $row ) {
            $restaurantes[] = $row;
        }

        return $restaurantes;
    }


    public function getNome(){
  		return $this->nome;
  	}

  	public function setNome(){
        if( isset($_POST['name']) )
  		    $this->nome = $_POST['name'];
  	}

  	public function getCpf(){
  		return $this->cpf;
  	}

  	public function setCpf(){
        if( isset($_POST['cpf']) )
  		    $this->cpf = $_POST['cpf'];
  	}

  	public function getTelefone(){
  		return $this->telefone;
  	}

  	public function setTelefone(){
        if( isset($_POST['telefone']) )
      		$this->telefone = $_POST['telefone'];
  	}

  	public function getEmail(){
  		return $this->email;
  	}

  	public function setEmail(){
        if( isset($_POST['email']) )
      		$this->email = $_POST['email'];
  	}

  	public function getEnder(){
  		return $this->ender;
  	}

  	public function setEnder(){
        if( isset($_POST['ender']) )
      		$this->ender = $_POST['ender'];
  	}

  }
