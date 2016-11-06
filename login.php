<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tatoo</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<?php include('link.php') ?>
<head>
<body>
<div style="background-image:url(img/header-bg.jpg)">

	<header class="text-center" >
            <div class="intro-text">
                <form action="login.php" method="post">
                    <br><h2 class="wow fadeInDown"><strong><span class="color">Login:</span></strong></h2>
                    <input type="text" name="login"/>
                    <br><br><h2 class="wow fadeInDown"><strong><span class="color">Senha:</span></strong></h2>
                    <input type="password" name="senha"/>
                    <br>
                    <br><input class="btn btn-default btn-lg page-scroll wow fadeInUp" type="submit" name="form-login" value="ENTRAR"/>
                    <input class="btn btn-default btn-lg page-scroll wow fadeInUp" type="submit"onclick="location.href='index.php'" name="form-login" value="VOLTAR"/>
                    <h4 class="wow fadeInDown"><strong><a href="">Esqueceu a senha?</a></strong></h4>
                    <h4 class="wow fadeInDown" class="fa fa-user-plus fa-flip-horizontal" ><strong>Ainda não tem cadastro <a href="cadastrar.php">clique aqui:</a></strong></h4>
                    

                    <!--li><i class="fa fa-user-plus fa-flip-horizontal">&nbsp</i> Cadastrar</a></li-->
          
                </form>
           </div>
        </header>
</div>
</body>
<?php 
  $login = $_POST['login'];
  $entrar = $_POST['entrar'];
  $senha = md5($_POST['senha']);
  $connect = mysql_connect('localhost','root','123');
  $db = mysql_select_db('Tatoo');
    if (isset($entrar)) {
            
      $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
        if (mysql_num_rows($verifica)<=0){
          echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
          die();
        }else{
          setcookie("login",$login);
          header("Location:index.php");
        }
    }
?>
<?php include('rodape.php') ?>