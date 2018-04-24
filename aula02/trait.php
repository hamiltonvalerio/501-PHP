<?php 
	
	trait Log{
		public function escreverLog($msg){
			echo "Log da {$msg}";
		}
	}

	class X{
		use Log;
	}

	class Y extends X{
		public function save(){
			$this->escreverLog('log');
		}
	}

	$var = new Y();
	$var->save();

?>