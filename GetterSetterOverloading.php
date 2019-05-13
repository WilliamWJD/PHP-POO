<?php

	//modelo
	class Funcionario{
		
		//atributos 
		public $nome=null;
		public $telefone=null;
		public $numFilhos=null;
		public $cargo=null;
		public $salario=null;

		function __set($atributo, $valor){
			$this->$atributo=$valor;
		}

		function __get($atributo){
			return $this->$atributo;
		}

		/*
		//getters setters
		function setNome($nome){
			$this->nome=$nome;
		}

		function setTelefone($telefone){
			$this->telefone=$telefone;
		}

		function setNumFilhos($numFilhos){
			$this->numFilhos=$numFilhos;
		}  

		function getNome(){
			return $this->nome;
		}

		function getTelefone(){
			return $this->telefone;
		}

		function getNumFilhos(){
			return $this->numFilhos;
		}
		*/

		//metodos
		function resumirCadFunc(){
			 
		}

		function modificarNumFilhos($numFilhos){
			$this->numFilhos=$numFilhos;
			return "A quantidade de filhos foi alterado para: $this->numFilhos";
		}
	}

	$y = new Funcionario();
	$y->__set('nome','William José Dias');
	$y->__set('numFilhos',3);
	$y->__set('cargo','Analista de Sistemas');
	$y->__set('salario',5000);
	echo $y->__get('nome') . ' tem ' . $y->__get('numFilhos') . ' filho(s)' . ' trabalha como '.$y->__get('cargo').' e tem um salario de  RS: '.$y->__get('salario');

	echo '<hr>';

	$x=new Funcionario();
	$x->__set('nome','Karolaine da silva Ribeiro Dias');
	$x->__set('numFilhos',3);
	$x->__set('cargo','Analista de RH');
	$x->__set('salario',3000);
	echo $x->__get('nome').' tem '.$x->__get('numFilhos').' filho(s)'. ' trabalha como '.$x->__get('cargo').' e tem um salario de  RS: '.$x->__get('salario');

?>