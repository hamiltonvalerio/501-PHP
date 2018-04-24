<?php 

	/**
	* 
	*/
	class Calc
	{
		
		public static function hello()
		{
			return 'Hello';
		}
	}

	$teste = new Calc();
	echo $teste->hello();
	echo Calc::hello();

 ?>