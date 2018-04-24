<?php 
	class Conta{
		public $titular;
		public $saldo;

		public function __construct(string $titular,float $saldoInicial){
			$this->titular = $titular;
			$this->saldo = $saldoInicial;
		}
	}

$conta = new Conta('Hamilton',5000.00);
var_dump($conta);

 ?>