<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <div style="background-image:url(img/header-bg.jpg)">
	<div class="container">
		<h1>Preencha os campos:</h1>
		<form class="" method="post" id="forminserir" action="">
		 	<div class="col-sm-12 col-lg-7">
		 		<div class="form-group">
					Gambiarra do usuario:
	    			<input type="text" name="usuario" value="">
	    		</div>
				<div class="form-group">
					Endereço:
	    			<input type="text" name="endereco" value="">
	    		</div>
	    		<div class="form-group">
	    			Bairro:
	    			<input type="text" name="bairro" value="">
	    		</div>
	    		<div class="form-group">
	    			Cidade:
	    			<input type="text" name="cidade" value="">
	    		</div>
	    		<div class="form-group">
	    			UF:
	    			<input type="text" name="uf" value="">
	    		</div>
	    		<div class="form-group">
	    			CEP:
	    			<input type="text" name="cep" value="">
	    		</div>	    		  
	    		<div class="form-group">
	    			Telefone Fixo:
	    			<input type="text" name="fixo" value="">
	    		</div>
	    		<div class="form-group">
	    			Telefone Celular:
	    			<input type="text" name="celular" value="">
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

if ($_POST !=null) {
	$usuario = $_POST['usuario'];//adaptar
	$endereco = $_POST['endereco'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];
	$cep = $_POST['cep'];
	$fixo = $_POST['fixo'];
	$celular = $_POST['celular'];

	$id=$Crud->insert($usuario,$endereco,$bairro,$cidade,$uf,$cep,$fixo,$celular);
	}
?>