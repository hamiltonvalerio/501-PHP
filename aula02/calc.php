<?php 

	class SomarException extends Exception{}
	class SubtrairException extends Exception{}
	class MultiplicarException extends Exception{}
	class DividirException extends Exception{}

	function dividir(int $a,int $b)
	{
		
		if($a < 0){
			throw new DividirException;
			
		}
		if ($a === 0) {
			throw new DividirException;		
		}
		if ($b === 0) {
			throw new DividirException;		
		}

		echo $a/$b;
	}

	try {
		dividir(-10,2);
	} 
	catch (DividirException $e)
	{
		echo 'Não pode dividir 0';
	} 
	catch (Exception $e)
	{
		echo $e->getMessage();
	}


 ?>