<?php 
	include_once('conexao.php');
<<<<<<< HEAD
  <div style="background-image:url(img/header-bg.jpg)">
=======

>>>>>>> c4f52bdb0edfa7cbf453a52c5a407cbf3d4ed682
	class Crud{
		public function insert($usuario,$endereco,$bairro,$cidade,$uf,$cep,$fixo,$celular){
			$sql = "INSERT INTO enderecos (id_usuario,endereco_usuario,bairro_usuario,cidade_usuario,uf_usuario,cep_usuario) values (?,?,?,?,?,?)";

			$query = conexao::conectar()->prepare($sql);
			$query->execute(array($usuario,$endereco,$bairro,$cidade,$uf,$cep));
			$idUser = conexao::conectar()->lastInsertId();

			$sql = "INSERT INTO telefones (id_usuario,tel_fixo,tel_cel) values (?,?,?)";
			$query = conexao::conectar()->prepare($sql);
			$query->execute(array($idUser,$fixo,$celular));
			$idFone = conexao::conectar()->lastInsertId();

			if($idUser!=$idFone){
				return false;
			}else{
				return $idUser;
			}
		}
		public function read($usuario){
			$sql = "SELECT * FROM enderecos WHERE id_usuario='$usuario'";
			$queryEndereco = conexao::conectar()->prepare($sql);
			$queryEndereco->execute();

			if($queryEndereco->rowCount()>0){
				while($res = $queryEndereco->fetch(PDO::FETCH_ASSOC)){
					$r[0]=$res;
				}
				$sql = "SELECT * FROM telefones WHERE id_usuario='$usuario'";
				$queryFone = conexao::conectar()->prepare($sql);
				$queryFone->execute();
				while($res2 = $queryFone->fetch(PDO::FETCH_ASSOC)){
					$r[1]=$res2;
				}

				print_r($r);
			}else{
				echo "Falhou";
			}
		}
	}
?>