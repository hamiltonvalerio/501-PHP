<?php 
	
	class Impressora{
		public function imprimir(DocGenerico $doc){
			$conteudo = $doc->getConteudo();
			echo $conteudo;
		}
	}

	// abstract class DocGenerico{
	// 	public abstract function getConteudo();
	// }

	interface DocGenerico{
		public function getConteudo();
	}

	class Documento implements DocGenerico{
		public $conteudo;

		public function __construct(string $conteudo){
			$this->conteudo = $conteudo;
		}

		public function getConteudo(){
			return $this->conteudo;
		}
	}

	class Planilha implements DocGenerico{

		public $conteudo;

		public function __construct(array $conteudo){
			foreach ($conteudo as $linha) {
				$this->conteudo .= $linha.'<br>';
			}	
		}
		public function getConteudo(){
			return $this->conteudo;
		}
	}

	$documento = new Documento('4linux');
	$imp = new Impressora();
	$imp->imprimir($documento);
	echo '<hr>';
	$planilha = new Planilha(['teste','teste1']);
	$imp->imprimir($planilha);
 	//$imp->imprimir('String qualquer'); //ERRO

 ?>