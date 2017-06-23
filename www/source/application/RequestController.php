<?php
class RequestController {
	public $pageTitle, $pageHtml, $isHtmlContent;
	private $paramArray;

	public function __construct() {
		$this->paramArray = explode('/', $_SERVER['REQUEST_URI']);

		if( isset($this->paramArray[1]) && $this->paramArray[1] == "ProjetosRestaurante")
			$this->fixArray();

		$this->isHtmlContent = $this->isHtmlContent();
	}

	// remove duas primeiras partes da requisição(URL)
	public function fixArray() {
		unset( $this->paramArray[0] );
		unset( $this->paramArray[1] );
		unset( $this->paramArray[2] );

		foreach($this->paramArray as $key => $value) {
			$auxArray[] = $value;
		}

		$this->paramArray = $auxArray;
	}

	public function getRequest() {
		$urlRequest = implode("/", $this->paramArray);

		if( strpos( $urlRequest, "?" ) !== false ) {
			$urlRequest = substr($urlRequest, 0, strpos($urlRequest, "?"));
		}

		ob_start();
		// se primeira posição estiver em branco é a pagina inicial
		if( $this->paramArray[0] == "" && !isset($this->paramArray[1]) ) {
			include VIEWS_PATH . "/index.php";
			// senão, busca a página requisitada
		} else {
			if( file_exists(VIEWS_PATH . '/' . $urlRequest . ".php") ) {
				include VIEWS_PATH . '/' . $urlRequest . ".php";
			} else {
				include VIEWS_PATH . "/404.php";
			}
		}

		// titulo da pagina, que será a variável $title dentro da view
		if( $this->isHtmlContent )
			$this->pageTitle = $title;

		// conteúdo da view processado pelo PHP
		$this->pageHtml = ob_get_clean();
	}
	/**
	*	Se haver 'cadastro', 'edita', ou 'remove' na URL, é uma requisição
	*	que não utiliza os arquivos do layout, logo não é um conteúdo HTML.
	*
	*	Utilizado em public/index.php para não incluir HTML(<head>,<body>).
	*/
	private function isHtmlContent() {
		$cadastro = array_search('valida-cadastro',$this->paramArray);
		$edicao   = array_search('edita',   $this->paramArray);
		$remocao  = array_search('remove',  $this->paramArray);

		if( $cadastro || $edicao || $remocao ) {
			return false;
		} else {
			return true;
		}

	}
}
