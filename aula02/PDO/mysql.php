<?php 

	require 'conexao.php';

	//$sql = "INSERT INTO usuarios (nome,email,senha) VALUES ('hamilton','hamilton@valerio.eti.br',md5('123'))";
	$sql = "select * from usuarios";
	$retorno = $dbMysql->query($sql);
	var_dump($retorno);

 ?>