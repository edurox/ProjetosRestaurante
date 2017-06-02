<?php

class NoobController {

	/**
	 *	Inclui os arquivos no index.php
	 */
	public static function getRequestedFile() {
		$url = $_GET['url'];
	    $url = explode('/', $url);

		$index = count($url);

		while($index) {
			// $url[$index]
		}
		// SIMULAR A MERDA ABAIXO DENTRO DO WHILE CARALHO!!
		if(file_exists('tpl/'.$url[0].'.php')) {
			require_once('tpl/'.$url[0].'.php');
		} elseif(file_exists('tpl/'.$url[0].'/'.$url[1].'.php')) {
			 require_once('tpl/'.$url[0].'/'.$url[1].'.php');
		} else {
			 require_once('tpl/404.php');
		}

	}

}
