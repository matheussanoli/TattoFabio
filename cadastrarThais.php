<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tatoo</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <?php include('link.php') ?>

<body>
  <div style="background-image:url(img/header-bg.jpg)">
  
  	<header class="text-center" >
              <div class="intro-text">
                  <form action="" method="post">
                  	<h2 class="wow fadeInDown"><strong><span class="color">Cadastro Usuário</span></strong></h2>
<<<<<<< HEAD
                     <br><h4 class="wow fadeInDown"><strong>Nome:</strong>
                          <div class="form-group">
                           <input  type="text" name="nome" required="" /><br>
                          </div>
  		                    <br><h4 class="wow fadeInDown"><strong>Email:</strong>
  		                    <div class="form-group">
                            <input type="email" name="usuario" required="" /><br>
                          </div>
  		                    <br><strong>Senha:</strong>
  		                    <div class="form-group">
                            <input type="password" name="senha" required="" /></h4>
=======
  		                    <br><h4 class="wow fadeInDown"><strong>Email:</strong>
  		                    <div class="form-group">
                            <input type="email" name="usuario"/><br>
                          </div>
  		                    <br><strong>Senha:</strong>
  		                    <div class="form-group">
                            <input type="password" name="senha"/></h4>
>>>>>>> c4f52bdb0edfa7cbf453a52c5a407cbf3d4ed682
                          </div>
  		                    <br>
  		                    <br>
                          <div class="form-group">
                            <input class="btn btn-default btn-lg page-scroll wow fadeInUp" type="submit" name="cadastrar" value="CADASTRAR"/>
                          </div>
                  </form>
             </div>
        </header>
  </div>
</body>
<?php 
  require_once('CrudUsuario.php');
  $Crud = new Crud();

  if($_POST!= null){
<<<<<<< HEAD
    $nome = $_POST['nome'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $validacao = false;
    $id=$Crud->insert($nome,$usuario,$senha);
    header('location: login.php');

=======
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $validacao = false;
    $id=$Crud->insert($usuario,$senha);
>>>>>>> c4f52bdb0edfa7cbf453a52c5a407cbf3d4ed682
  }
?>
</html>