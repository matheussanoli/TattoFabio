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
                    <h4 class="wow fadeInDown" class="fa fa-user-plus fa-flip-horizontal" ><strong>Ainda não tem cadastro <a href="cadastrarThais.php">clique aqui:</a></strong></h4>
                    

                    <!--li><i class="fa fa-user-plus fa-flip-horizontal">&nbsp</i> Cadastrar</a></li-->
          
                </form>
           </div>
        </header>
</div>
</body>
<?php 
if ($_POST) {
  # code...

require_once('CrudUsuario.php');
$Crud = new Crud();
$id = $_POST['login'];
$senha = $_POST['senha'];
$where = 'id = '.$id;
$result = $Crud->read($id,$senha);
if ($result!=null) {
  # code...

foreach ($result as $r) {
  
  header('Location: agenda.php?id_usuario='.$r['id_usuario']);
  }
   }else{
echo "Digite a senha correta";
    
}



}
  
?>
