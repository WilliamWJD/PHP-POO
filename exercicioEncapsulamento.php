<?php
	class Computador{
		private $placa='Gigabyte GA X58AUD9';
		private $memoria='DDR4 8GB';
		private $cpu='Intel Core I7';

		public function __get($atributo){
			return $this->$atributo;
		}

		public function __set($atributo, $valor){
			$this->$atributo=$valor;
		}
	}

	class ComputerWill extends Computador{
		public $gpu=null;

		public function __set($atributo,$valor){
			$this->$atributo=$valor;
		}

		public function __get($atributo){
			return $this->$atributo;
		}
	}

	$computador=new Computador();

	echo '<pre>';
		print_r($computador);
	echo '</pre>';

	echo '<hr>';

	$computerWill=new ComputerWill();
	$computerWill->__set('gpu','G-Force 9400 x');
	
	echo '<pre>';
		print_r($computerWill);
	echo '</pre>';
?>