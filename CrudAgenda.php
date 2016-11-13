<?php 
	include_once('conexao.php');

	class Crud
	{
		public function insert($usuario,$horario,$validacao)
		{
			$sql = "INSERT INTO agenda (IdUsuario,Agendamento,Validacao) values (?,?,?)";

			$query = conexao::conectar()->prepare($sql);

			$query->execute(array($usuario,$horario,$validacao));

			$id = conexao::conectar()->lastInsertId();

			return $id;
		}
		public function read($where = null)
		{
			$sql = "SELECT * FROM agenda";

	if (!empty($where))
	 {
		$sql .=" WHERE " . $where;
	}
			
			$query = conexao::conectar()->prepare($sql);

			$query->execute();

			if($query->rowCount()>0)
			{
			while($res = $query->fetch(PDO::FETCH_ASSOC))
			 {
				$r[]=$res;
			}
		
		return $r;

		}else
		{
					return false;
		}
	}
	public function update($dados,$id){
	$sql = "UPDATE agenda SET ";

	 foreach ($dados as $key => $val){
	 	$col[] = $key. ' = ?';
	 	$valores[] = $val;
	 	 }

	 	 $str = implode(",",$col);

		 	 $sql .= $str;

		 	 $sql.= "WHERE id = ?";

		 	 $valores[] = $id;

		 	 $query = conexao::conectar()->prepare($sql);

		 	 $query->execute($valores);

	}
public function delete($id){
$sql = "DELETE FROM agenda WHERE id = ?";
$query = conexao::conectar()->prepare($sql);
$query->execute(array($id));
}
	}

	 ?>	