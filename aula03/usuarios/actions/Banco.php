<?php 

	include_once dirname(__DIR__) . '/db/Conexao.php';

	class Banco extends Conexao{
		
		public function getConectarPostgres()
		{
			return $this->conectaPostgres();
		}

		public function getConectarMysql()
		{
			return $this->conectaMysql();
		}

		public function insert()
		{

		}

		public function alterar()
		{

		}

		public function deletar()
		{

		}

		public function listar($qualbanco)
		{
			$array = [
    				0 => ['id' => '', 'nome' => '', 'email' => '']
				];

			$sql = "select * from usuarios";
			$retorno = $qualbanco->query($sql);
			$usuarios = $retorno->fetchAll(PDO::FETCH_ASSOC);
			return !empty($usuarios)?$usuarios:$array;
		}

		public function getExiste($qualbanco, $email)
		{
			$sql = "select true from usuarios where email = '$email'";
			$retorno = $qualbanco->query($sql);
			$usuarios = $retorno->fetch(PDO::FETCH_ASSOC);
			return !empty($usuarios)?$usuarios:false;
		}

	}

 ?>