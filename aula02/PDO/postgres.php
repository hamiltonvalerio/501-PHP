<?php 

	require 'conexao.php';

	//$sql = "INSERT INTO usuarios (nome,email,senha) VALUES ('hamilton','hamilton@valerio.eti.br',md5('123'))";
	$sql = "select * from usuarios";
	$retorno = $dbPostgres->query($sql);
	$usuarios = $retorno->fetchAll(PDO::FETCH_OBJ);
	/*foreach ($retorno as $key) {
		print_r($key);
	}*/
	foreach ($usuarios as $key) {
		print_r($key);
	}

 ?>