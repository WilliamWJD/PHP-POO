<?php
	
	class empresa{
		public $funcionario=null;
		public $cargo=null;
		public $salario=null;

		function __set($atributo, $valor){
			$this->$atributo=$valor;
		}

		function __get($atributo){
			return $this->$atributo;
		}

	}

	$func=new empresa();
	$func->__set('funcionario','William José Dias');
	$func->__set('cargo', 'Analista de Sistemas');
	$func->__set('salario', 5000);
	echo $func->__get('funcionario').' trabalha no cargo '.$func->__get('cargo').' e ganha um salario de '.$func->__get('salario');

	echo '<hr>';

	$func2=new empresa();
	$func2->__set('funcionario','Karolaine da silva Ribeiro Dias');
	$func2->__set('cargo', 'Analista de RH');
	$func2->__set('salario', 3000);
	echo $func2->__get('funcionario').' trabalha no cargo '.$func2->__get('cargo').' e ganha um salario de '.$func2->__get('salario');

?>