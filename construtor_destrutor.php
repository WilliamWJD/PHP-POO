<?php

	class Pessoa{
		public $nome=null;
		function __construct($nome){
			echo 'Objeto iniciado ';
			$this->nome=$nome;
		}

		function __destruct(){
			echo 'Objeto removido';
		}

		function __get($atributo){
			return $this->$atributo;
		}

		function correr(){
			return $this->__get('nome').' está correndo !';
		}
	}

	$pessoa=new Pessoa('William');
	echo $pessoa->__get('nome');
	echo '<hr>';
	echo $pessoa->correr();

	echo'<hr>';
	unset($pessoa);

?>