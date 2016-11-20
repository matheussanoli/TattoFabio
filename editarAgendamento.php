<?php 
require_once('CrudAgenda.php');
$Crud = new Crud();
$id = $_GET['idAgendamento'];
$where = 'idAgendamento = '.$id;
$result = $Crud->read($where);
if ($_POST) {
	
	$Crud->update($_POST,$id);
	//header('Location: listarProdutos.php');
}
 ?>
 <form class="form-control" method="post" form="forminserir" action="">
	<input type="text" name="idAgendamento" value="<?php echo $result[0]['idAgendamento']; ?>">
	<input type name="IDusuario" value="<?php echo $result[0]['nome_usuario']; ?>">	 
	<input type="datetime-local" name="agendamento" value="<?php echo $result[0]['Agendamento']; ?>">
	<input type="submit" class="btn btn-primary" name="">
</form>
