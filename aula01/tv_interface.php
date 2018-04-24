<?php 

	interface TvInterface{

		public function aumentarvolume();
		public function diminuirvolume();
		public function ligar();
		public function desligar();
		public function trocarCanal(int $novoCanal);

	}

	class Tv implements TvInterface{
		$ligar = false;
		$volume = 0;
		$canal;
		public function aumentarvolume(){
			this->volume++; 
		}
		public function diminuirvolume(){
			if(this->volume>0){
				this->volume--; 	
			}
		}
		public function ligar(){
			$this->ligar = true;
		}
		public function desligar(){
			$this->ligar = false;
		}
		public function trocarCanal(int $novoCanal){
			$this->canal = $novoCanal;
		}

	}

 ?>