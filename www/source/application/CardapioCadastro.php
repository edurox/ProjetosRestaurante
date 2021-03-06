<?php
  require_once APP_PATH . "/Database.php";
  require_once APP_PATH . "/Default.php";

  class CardapioCadastro {
    private $restid, $nome, $preco;
    private $con;

    public function __construct() {
        $this->setID();
        $this->setNome();
        $this->setPreco();

        $database = new Database();
        $this->con = $database->connect();
    }

    public function cadastro() {
        $count = $this->con->exec("INSERT INTO
                          `Cardapio`(
                            `id_restaurante`,
                            `nome_prato`,
                            `preco`
                          )
                            VALUES(
                              '$this->restid',
                              '$this->nome',
                              '$this->preco'
                            )") or die(print_r($this->con->errorInfo(), true));

        echo "Cadastro de $this->nome realizado com sucesso";
    }

    public function getById() {
        $select = "SELECT * FROM Cardapio WHERE id_restaurante = " . $_GET['id'];

        foreach( $this->con->query($select) as $row ) {
            $cardapio[] = $row;
        }

        return $cardapio;
    }


    public function getID(){
  		return $this->restid;
  	}

  	public function setID(){
        if( isset($_POST['restid']) )
  		    $this->restid = $_POST['restid'];
  	}

  	public function getNome(){
  		return $this->nome;
  	}

  	public function setNome(){
        if( isset($_POST['prodpromo']) )
  		    $this->nome = $_POST['prodpromo'];
  	}

  	public function getPreco(){
  		return $this->preco;
  	}

  	public function setPreco(){
        if( isset($_POST['preco1']) )
      		$this->preco = $_POST['preco1'];
  	}


  }
