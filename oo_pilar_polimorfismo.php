<?php	
	class veiculo{
		public $placa=null;
		public $cor=null;

		function acelerar(){
			echo 'Acelerar';
		}

		function freiar(){
			echo 'Freiar';
		}

		function trocarMarcha(){
			echo 'Desengatar embreagem com o pé e engatar marcha com a mão';
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

		function trocarMarcha(){
			echo 'Desengatar embreagem com a mão e trocar de marcha com o pé';
		}
	}

	class Caminhao extends veiculo{

	}


	$carro=new Carro('EIJ7766','Prata');
	$carro->trocarMarcha();
	
	echo '<hr>';

	$moto=new Moto('kkk123','Azul');
	$moto->trocarMarcha();

	echo '<hr>';

	$caminhao=new Caminhao();
	$caminhao->trocarMarcha();




?>