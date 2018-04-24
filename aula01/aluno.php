<?php 

	class Aluno{

		public $nome;
		public $email;

		public function __construct(string $nome, string $email){
			$this->nome = $nome;
			$this->email = $email;
		}

		public function getNome(){
			return $this->nome;
		}

		public function getEmail(){
			return $this->email;
		}


	}

	class Turma{

		public $curso;
		public $periodo;

		public function __construct(string $curso, string $periodo){
			$this->curso = $curso;
			$this->periodo = $periodo;
		}

		public function getCurso(){
			return $this->curso;
		}

		public function getPeriodo(){
			return $this->Periodo;
		}

	}

	class Matricula{
		
		public $aluno;
		public $turma;

		public function __construct(Aluno $aluno, Turma $turma){
			$this->aluno = $aluno;
			$this->turma = $turma;
		}
	}



	echo '<pre>';
	$hamilton = new Aluno('hamilton','hamilton@valerio.eti.br');
	$turma = new Turma('PHP','diurno');
	echo $hamilton->getEmail();
	echo '<hr>';
	$matricula = new Matricula($hamilton,$turma);
	echo $matricula->aluno->getEmail();

 ?>