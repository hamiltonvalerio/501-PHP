<?php 
	
	//DATA SOURCE NEMA, USER, PASSWORD
	//Mysql 	--- "mysql:host=localhost;dbname=aula,hamilton,@da4linux";
	//Postgres 	--- "pgsql:host=localhost;dbname=aula,hamilton,123";
	$dbMysql 	= new PDO("mysql:host=localhost;dbname=aula","hamilton","@da4linux");

	$dbMysql->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	$dbPostgres = new PDO("pgsql:host=localhost;dbname=aula","hamilton","123");

	$dbPostgres->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

	echo "<pre>";

	var_dump($dbMysql);
	echo "<hr>";
	var_dump($dbPostgres);

 ?>