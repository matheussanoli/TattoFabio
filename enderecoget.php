<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<h1>Preencha o usuario para ver seu endereco:</h1>
		<form class="" method="get" id="forminserir" action="">
		 	<div class="col-sm-12 col-lg-7">
		 		<div class="form-group">
					Gambiarra do usuario:
	    			<input type="text" name="usuario" value="">
	    		</div>
			</div>
	
			<div class="form-group">
				<input  class="btn btn-primary" type="submit">
			</div>
		</form>
 	</div>
</body>
</html>	

<?php
	require_once('CrudEndereco.php');
	$Crud = new Crud();

if ($_GET !=null) {
	$usuario = $_GET['usuario'];

	$id=$Crud->read($usuario);
}
?>