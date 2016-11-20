



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	      <div class="container">
<h1>Marque a hora aqui</h1>
	<form class="" method="post" id="forminserir" action="">
		 <div class="col-sm-12 col-lg-7">
		<div class="form-group">
	    <input type="text" name="Usuario" value="">
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
	$Crud = new Crud();

if ($_POST !=null) {
	$Usuario = $_POST['Usuario'];
	$Agendamento = $_POST['Agendamento'];
	$validacao = false; 
	$id=$Crud->insert($Usuario,$Agendamento,$validacao);
	}
	?>

