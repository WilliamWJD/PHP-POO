<?php

	class Pai{
		private $nome='William';
		protected $sobrenome='José Dias';
		public $humor='Feliz';

		public function __get($atributo){
			return $this->$atributo;
		}

		public function __set($atributo, $valor){
			$this->$atributo=$valor;
		}

		private function executarMania(){
			echo 'Assobiar';
		}

		protected function responder(){
			echo 'Oi';
		}

		public function executarAcao(){
			$x=rand(1,10);
			if($x>=1 && $x<=8){
				$this->executarMania();
			}else{
				$this->responder();
			}
		}
		
	}

	$pai=new Pai();
	echo 'O Funcionário ',$pai->__get('nome'),' ', $pai->__get('sobrenome'),' está se sentindo ',$pai->__get('humor');
	echo '<hr>';

	$pai->__set('nome','Karolaine');
	$pai->__set('sobrenome','Ribeiro Dias');
	$pai->__set('humor','Irritada');

	echo 'A Funcionária ',$pai->__get('nome'),' ', $pai->__get('sobrenome'),' está se sentindo ',$pai->__get('humor');
	
	echo '<hr>';

	echo $pai->executarAcao();
?>