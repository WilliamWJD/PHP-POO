<?php
	
	interface EquipamentoEletronicoInterface{
		public function ligar();
		public function desligar();
	}

	class Geladeira implements EquipamentoEletronicoInterface{
		public function abrirPorta (){
			echo 'Abrir porta';
		}

		public function ligar(){
			echo 'Ligar';
		}

		public function desligar(){
			echo 'Desligar';
		}
	}

	class Tv implements EquipamentoEletronicoInterface{
		public function trocarCanal(){
			echo 'Trocar canal';
		}

		public function ligar(){
			echo 'Ligar';
		}

		public function desligar(){
			echo 'Desligar';
		}
	}


?>