<?php 
	class Conexao
	{
		public function conectaMysql()
		{
			try {
				$dbMysql = new PDO("mysql:host=localhost;dbname=aula","hamilton","@da4linux");
				$dbMysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);		
				return $dbMysql;
			} catch (Exception $e) {
				echo $e;
			}
			
		}

		public function conectaPostgres()
		{
			try {
				$dbPostgres = new PDO("pgsql:host=localhost;dbname=aula","hamilton","123");
				$dbPostgres->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);	
				return $dbPostgres;
			} catch (Exception $e) {
				echo $e;
			}
			
		}
	}
 ?>