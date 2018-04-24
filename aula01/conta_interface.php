<?php 

	interface ContaINterface{

		public function sacar(float $valor);
		public function depositar(float $valor);

	}

	class Conta implements ContaINterface{
		public function sacar(float $valor){}
		public function depositar(float $valor){}
	}

 ?>