<?php 
	
	/**
	* 
	*/
	class Pessoa
	{

		public $nome;
		public $email;
		
		function __construct(string $nome,string $email)
		{
			$this->nome = $nome;
			$this->email = $email;
		}

		public function __toString()
		{
			return 'Nome '.$this->nome.' Email '.$this->email;
		}
	}

	$pessoa = new Pessoa('Hamilton','hamilton@valerio.eti.br');
	echo $pessoa;

 ?>