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
                  <form action="grava.php" method="post">
                  	<h2 class="wow fadeInDown"><strong><span class="color">Cadastro Usuário</span></strong></h2>
  		                    <br><h4 class="wow fadeInDown"><strong>Email:</strong>
  		                    <input type="email" name="usuario"/><br>
  		                    <br><strong>Senha:</strong>
  		                    <input type="password" name="senha"/></h4>
  		                    <br>
  		                    <br><input class="btn btn-default btn-lg page-scroll wow fadeInUp" type="submit" name="cadastrar" value="CADASTRAR"/>
  		                    <input class="btn btn-default btn-lg page-scroll wow fadeInUp" type="submit" onclick="location.href='index.php'" name="form-login" value="CANCELAR"/>

                  </form>
             </div>
        </header>
  </div>
</body>
<?php include('rodape.php') ?>
</html>