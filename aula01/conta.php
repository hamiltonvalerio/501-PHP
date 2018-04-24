<?php 

	class Conta{

		public $saldo;
		public $numConta;

		public function sacar(float $valor){
			if($valor <= $this.verSaldo()){
				return $this->saldo-=$valor;	
			}else{
				return 0;
			}
			
		}

		public function depositar(float $valor){
			return $this->saldo+=$valor;
		}

		public function verSaldo(){
			return $this->saldo;
		}

	}
	echo '<pre>';
	$caixa = new Conta();
	$caixa->numConta = rand(100,999);
	$caixa->saldo = 10000.00;
	echo $caixa->verSaldo();

 ?>