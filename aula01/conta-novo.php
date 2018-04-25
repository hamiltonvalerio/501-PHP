<?php 

	abstract class Conta{
		public $saldo;
		public $titular;

		public function sacar(float $valor){
			if($valor <= $this->verSaldo()){
				$this->saldo-=$valor;
				return $valor;
			}else{
				return 0;
			}
		}
		
		public final function verSaldo(){
			return $this->saldo;
		}
		
		public abstract function depositar(float $valor);
		public abstract function gerarNumConta();
		public abstract function abrirConta(float $valor);	
		public abstract function fecharConta();		
	}

	class ContaCorrente extends Conta{

		public $numConta;
		public $chequeEspecial = false;

		public function depositar(float $valor){
			$this->saldo += $valor;
		}

		public function gerarNumConta(){
			$this->numConta = 'CC: '.rand(100,999).'-'.rand(10,99);
		}

		public function abrirConta(float $valor){
			if($valor<50){
				return 'Valor inferior a 50';
			}else{
				$this->depositar($valor);
			}
		}

		public function fecharConta(){
			if($this->verSaldo()!=0){
				return ($this->verSaldo()>0)?'Saldo acima de zero'.$this->verSaldo():'Saldo abaixo de zero'.$this->verSaldo();
			}
		}

		public function sacar(float $valor){
			if($valor > $this->verSaldo()){
				$this->chequeEspecial = true;
				$this->saldo = ($this->verSaldo() - $valor)-1;
			}
		}

	}

	class ContaPoupanca extends Conta{

		public $numConta;

		public function depositar(float $valor){
			$this->saldo += ($valor+1);
		}

		public function gerarNumConta(){
			$this->$numConta = 'CP: '.rand(100,999).'-'.rand(10-99);	
		}

		public function abrirConta(float $valor){
			if($valor<100){
				return 'Valor inferior a 100';
			}else{
				$this->depositar($valor);
			}
		}

		public function fecharConta(){

		}

	}

	echo '<pre>';
	$cc = new ContaCorrente();
	$cp = new ContaPoupanca();

	var_dump($cc);
	echo '<hr>';
	var_dump($cp);
	echo '<hr>';
	echo 'Saldo '.$cc->verSaldo();
	echo '<hr>';
	echo 'NUmero da conta: ';
	$cc->gerarNumConta();
	echo $cc->numConta;
	echo '<hr>';
	echo 'Deposito ';
	$cc->depositar(5000.00);
	echo 'Saldo '.$cc->verSaldo();
	echo '<hr>';
	echo 'Saque 5001.00 ';
	$cc->sacar(5001.00);
	echo ' Saldo '.$cc->verSaldo();
	if($cc->chequeEspecial){
		echo '<br>';
		echo 'Cheque especial ativo';
	}
 ?>