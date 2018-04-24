<?php 
	
	/**
	* 
	*/
	class Caneta 
	{
		public $cor;
		public $marca;
		public $tampada = true;

		public function escrever(string $texto){
			return "estou escrevendo: ".$texto;
		}

		public function destampar(){
			$this->tampada = false;
		}

		public function tampar(){
			$this->tampada = true;
		}
		
	}
	echo '<pre>';
	$azul = new Caneta();
	$vermelha = new Caneta();
	var_dump($azul);
	echo '<br>';
	var_dump($vermelha);
	$azul->cor = 'azul';
	$vermelha->cor = 'vermelha';
	$azul->marca = 'Bic';
	$vermelha->marca = 'Pilot';
	var_dump($azul);
	echo '<br>';
	var_dump($vermelha);
	echo '<hr>';
	$azul->destampar();
 ?>