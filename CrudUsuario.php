<?php
	include_once('conexao.php');

	class Crud{
		public function insert($usuario, $senha){
			$sql = "INSERT INTO usuarios (email_usuario, senha_usuario) values (?,?)";

			$query = conexao::conectar()->prepare($sql);

			$query->execute(array($usuario,$senha));

			$id = conexao::conectar()->lastInsertId();

			return $id;
		}
		public function read($login, $senha){
			$sql = "SELECT * FROM usuarios WHERE email_usuario='$login' AND senha_usuario='$senha'";
		    $query = conexao::conectar()->prepare($sql);
		    $query->execute();

		    if($query->rowCount()>0){
		      return true;    
		    }else{
		      return false;
		    }
		}
	}
?>