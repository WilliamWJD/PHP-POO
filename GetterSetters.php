<?php

	//modelo
	class Funcionario{
		
		//atributos 
		public $nome=null;
		public $telefone=null;
		public $numFilhos=null;

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

		//metodos
		function resumirCadFunc(){
			 
		}

		function modificarNumFilhos($numFilhos){
			$this->numFilhos=$numFilhos;
			return "A quantidade de filhos foi alterado para: $this->numFilhos";
		}
	}

	$y = new Funcionario();
	$y->setNome('William Dias Ribeiro');
	$y->setNumFilhos(2);
	echo $y->getNome() . ' tem ' . $y->getNumFilhos() . ' filho(s)';

	echo '<hr>';

	$x=new Funcionario();
	$x->setNome('Karolaine da silva Ribeiro Dias');
	$x->setNumFilhos(2);
	echo $x->getNome().' tem '.$x->getNumFilhos().' filho(s)';

?>