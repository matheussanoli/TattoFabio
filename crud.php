<?php 
	include_once('conexao.php');

	class CrudClientes
	{
		public function insert($nome,$email,$telefone)
		{
			$sql = "INSERT INTO cliente (nome,email,telefone) values (?,?,?)";

			$query = conexao::conectar()->prepare($sql);

			$query->execute(array($nome,$email,$telefone));

			$id = conexao::conectar()->lastInsertId();

			return $id;
		}
		?>