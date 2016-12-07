

<?php 
require_once('CrudUsuario.php');
	$Crud = new Crud();
	$id_usuario = $_GET['id_usuario'];
	$result = $Crud->read2($id_usuario);
    if ($result!=null) {
  # code...

foreach ($result as $r) {
  
  $nome = $r['nome_usuario'];
   
  }

}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div style="background-image:url(img/header-bg.jpg)">
	      <div class="container">
<h1>Marque a hora aqui</h1>
	<form class="" method="post" id="forminserir" action="">
		 <div class="col-sm-12 col-lg-7">
		<div class="form-group">
	    <input type="text" name="Usuario" value="<?php echo $nome ?>">
	    <input type="hidden" name="id">
	    </div>  
	    <div class="form-group">
		<input  type="datetime-local" name="Agendamento" class="form-control" required=""></div>
</div>
	
		<div class="form-group">
		<input  class="btn btn-primary" type="submit"></div>
	</form>
 </div>
</body>
</html>	

<?php
	require_once('CrudAgenda.php');
	$Crud = new CrudAgenda();

if ($_POST !=null) {
	
	$Agendamento = $_POST['Agendamento'];
	$validacao = false; 
	$id=$Crud->insert($id_usuario,$Agendamento,$validacao);
	}
	?>

