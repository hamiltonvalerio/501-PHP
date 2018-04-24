<?php 
	
	class Carro{
		public $cor;
		public $marca;
		public $velocidade;
		public $marcha;

		public function acelerar(){
			$this->velocidade+=10;

		}

		public function freiar(){
			$this->velocidade-=10;
		}

		public function trocarMarcha(int $m){
			$this->marcha = $m;
		}

		public function verVelocidade(){
			return $this->velocidade;
		}

		public function verMarcha(){
			return $this->marcha;
		}
	}
	echo '<pre>';
	$fusca = new Carro();
	$fusca->cor = 'Preto';
	$fusca->marca = 'VW';
	$fusca->acelerar();
	$fusca->acelerar();
	$fusca->acelerar();
	var_dump($fusca);


	
	//$fusca->acelerar();
	//$fusca->verVelocidade();

 ?>