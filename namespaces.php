<?php
	
	namespace A;
	class Cliente implements CadastroInterface{
		public $nome='William José Dias';

		public function __construct(){
			echo '<pre>';
				print_r(get_class_methods($this));
			echo '<pre>';	
		}

		public function __get($atributo){
			return $this->$atributo;
		}

		public function salvar(){
			echo 'Salvando cliente!';
		}
	}

	interface CadastroInterface{
		public function salvar();
	}

	namespace B;
	class Cliente implements CadastroInterface{
		public $nome='Elivelton';

		public function __construct(){
			echo '<pre>';
				print_r(get_class_methods($this));
			echo '<pre>';	
		}

		public function __get($atributo){
			return $this->$atributo;
		}

		public function remover(){
			echo 'removendo cliente !';
		}
	}

	interface CadastroInterface{
		public function remover();
	}

	$c=new \A\Cliente();

	print_r($c);
	echo '</br>';
	echo $c->__get('nome');
	echo '</br>';
	echo $c->salvar();

?>