<?php
	include_once('conexao.php');
	class Crud{
		public function insert($nome,$usuario, $senha){
			$sql = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario) values (?,?,?)";

			$query = conexao::conectar()->prepare($sql);

			$query->execute(array($nome,$usuario,$senha));

			$id = conexao::conectar()->lastInsertId();

			return $id;
		}
		public function read($login, $senha){
			$sql = "SELECT * FROM usuarios WHERE email_usuario='$login' AND senha_usuario='$senha'";
		    $query = conexao::conectar()->prepare($sql);
		    $query->execute();

		    if($query->rowCount()>0){
		      	while($res = $query->fetch(PDO::FETCH_ASSOC))
			 {
				$r[]=$res;
			}
			return $r; 
		    }else{
		      return null;
		    }
		}
		

		    public function read2($id_usuario){
			$sql = "SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
		    $query = conexao::conectar()->prepare($sql);
		    $query->execute();

		    if($query->rowCount()>0){
		      	while($res = $query->fetch(PDO::FETCH_ASSOC))
			 {
				$r[]=$res;
			}
			return $r; 
		    }else{
		      return null;
		    }
		}
	}
?>