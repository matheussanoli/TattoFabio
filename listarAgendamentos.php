
<?php
require_once('CrudAgenda.php');
	$Crud = new Crud();
	  <div style="background-image:url(img/header-bg.jpg)">
	$result = $Crud->read();
  ?><div class="container">
  <h1>Todos os procedimentos cadastrados</h1>
<table class="table table-hover">

	<?php
	if ($result != null ) {
		echo '<tr>
	<th>ID</th>
	<th>Usuario</th>
	<th>Agendamento</th>
	<th colspan="4">Opções</th>
	</tr>';
	foreach ($result as $r) {
		echo '<tr>
		<td class="col-lg-4 col-sm-4 col-md-4 col-xs-12">'.$r['idAgendamento'].'</td>
		 <td class="col-lg-4 col-sm-4 col-md-4 col-xs-12">'.$r['nome_usuario'].' </td>
		<td class="col-lg-4 col-sm-4 col-md-4 col-xs-12">'.$r['Agendamento'].'</td>
		<td class="col-lg-4 col-sm-4 col-md-4 col-xs-12"><a href="editarAgendamento.php?idAgendamento='.$r['idAgendamento'].'">Editar</a><td>
		<td class="col-lg-4 col-sm-4 col-md-4 col-xs-12"><a href="deletarProdutos.php?id='.$r['id'].'">DELETAR</a><td>
		</tr>';
	}	
	}else{
		echo '<tr><td>Não existem itens para serem exibidos</td></tr>';
	}
	?>
	</table></div>