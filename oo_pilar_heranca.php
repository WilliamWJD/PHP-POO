<?php
	
	class veiculo{
		public $placa=null;
		public $cor=null;

		function acelerar(){
			echo 'Acelerar';
		}

	}

	class Carro extends veiculo{

		function __construct($placa, $cor){
			$this->placa=$placa;
			$this->cor=$cor;
		}

		public $teto_solar=true;

		function abrirTetoSolar(){
			echo 'Abrir teto solar';
		}
		function alterarPosicaoVolante(){
			echo 'Alterar posição volante';
		}
	}

	class Moto extends veiculo{

		function __construct($placa, $cor){
			$this->placa=$placa;
			$this->cor=$cor;
		}

		public $contraPesoGuidao=true;

		function empinar(){
			echo 'Empinar';
		}
	}


	$carro=new Carro('EIJ7766','Prata');
	$moto=new Moto('kkk123','Azul');


	echo '<pre>';
		print_r($carro);
	echo '<hr>';
		print_r($moto);
	echo '</pre>';

?>