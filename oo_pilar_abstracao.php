<?php

	//modelo
	class Funcionario{
		
		//atributos 
		public $nome='William José Dias';
		public $telefone='19 - 38649847';
		public $numFilhos=1;  

		//metodos
		function resumirCadFunc(){
			return "$this->nome possui $this->numFilhos filho(s)";
		}

		function modificarNumFilhos($numFilhos){
			$this->numFilhos=$numFilhos;
			return "A quantidade de filhos foi alterado para: $this->numFilhos";
		}
	}

	$y = new Funcionario();
	echo $y->resumirCadFunc();
	echo '</br>';
	echo $y->modificarNumFilhos(10);

?>