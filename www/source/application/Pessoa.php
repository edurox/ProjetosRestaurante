<?php
  // inclui conexao

  class Pessoa {
    private $nome, $cpf, $telefone, $email, $ender;

    public __construct() {

      $this->setNome();
      $this->setCpf();
      $this->setTelefone();
      $this->setEmail();
      $this->setEnder();
    }

    public function cadastro() {
      // mysql
    }

    public function remove() {

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
