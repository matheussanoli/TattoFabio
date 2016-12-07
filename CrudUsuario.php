<?php
	include_once('conexao.php');
<<<<<<< HEAD
	class Crud{
		public function insert($nome,$usuario, $senha){
			$sql = "INSERT INTO usuarios (nome_usuario, email_usuario, senha_usuario) values (?,?,?)";

			$query = conexao::conectar()->prepare($sql);

			$query->execute(array($nome,$usuario,$senha));
=======

	class Crud{
		public function insert($usuario, $senha){
			$sql = "INSERT INTO usuarios (email_usuario, senha_usuario) values (?,?)";

			$query = conexao::conectar()->prepare($sql);

			$query->execute(array($usuario,$senha));
>>>>>>> c4f52bdb0edfa7cbf453a52c5a407cbf3d4ed682

			$id = conexao::conectar()->lastInsertId();

			return $id;
		}
		public function read($login, $senha){
			$sql = "SELECT * FROM usuarios WHERE email_usuario='$login' AND senha_usuario='$senha'";
		    $query = conexao::conectar()->prepare($sql);
		    $query->execute();

		    if($query->rowCount()>0){
<<<<<<< HEAD
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
=======
		      return true;    
		    }else{
		      return false;
>>>>>>> c4f52bdb0edfa7cbf453a52c5a407cbf3d4ed682
		    }
		}
	}
?>