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

	class Filho extends Pai{
		/*
		public function getAtributo($atributo){
			return $this->$atributo;
		}

		public function setAtributo($atributo, $valor){
			$this->$atributo=$valor;
		}
		*/
	}

	$filho=new Filho();
	echo '<pre>';
		print_r($filho);
	echo '</pre>';

	//exibir os metodos
	echo '<pre>';
		print_r(get_class_methods($filho));
	echo '</pre>';
?>