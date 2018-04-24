<?php 

interface FreteStrategy{
	public function calcular();
}

class freteNormal implements FreteStrategy{
	public function calcular(){
		echo 'Frete Normal';
	}
}

class freteExpresso implements FreteStrategy{
	public function calcular(){
		echo 'Frete Expresso';
	}
}

class freteTurbo implements FreteStrategy{
	public function calcular(){
		echo 'Frete Turbo';
	}
}

class Pedido{

	public $frete;

	public function __contruct(FreteStrategy $tipoFrete){
		$this->frete = $tipoFrete;
		// if($tipoFRete == 'normal'){
		// 	echo 'normal';
		// }else if($tipoFRete == 'expresso'){
		// 	echo 'expresso';
		// }else if($tipoFRete == 'turbo'){
		// 	echo 'turbo';
		// }else{
		// 	echo 'nenhum';
		// }
	}

	public function calcularTotalPedido{
		$this->frete->calcular();
	}
}

$frete = new freteTurbo();


?>