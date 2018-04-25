<?php 
	include_once 'actions/Banco.php';
	$con = new Banco();
	$var = '';
	$array = [0 => ['id' => '', 'nome' => '', 'email' => '']];

	if(!empty($_POST)){
		if(isset($_POST['base'])){
			if($_POST['base']=='postgres'){
				$var = $con->getConectarPostgres();
				$array = $con->listar($var);
			}else if($_POST['base']=='mysql'){
				$var = $con->getConectarMysql();
				$array = $con->listar($var);
			}else{
				echo "Necessário escolher o banco!!! <br>";
			}
		}else{
			echo "Necessário escolher o banco!!! <br>";
		}

		if(isset($_POST['email'])){
			//$bol = $con->getExiste($var,$_POST['email']);	
			echo $var;
			die();
		}
	}
 ?>
<form method="POST" action="">
	<select name="base">
		<option value="" selected="true"></option>
		<option value="mysql">MySQL</option>
		<option value="postgres">PostgreSQL</option>
	</select>
	<input type="submit" value="Select">
</form>

<form method="POST" action="">
	<p>Name:<input type="text" name="name"></p>
	<p>Email:<input type="email" name="email"></p>
	<p>Pass:<input type="password" name="pass"></p>
	<p><input type="submit" value="Save"></p>
</form>

<table border="1">
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Email</th>
		<th>Actions</th>
	</tr>
	<?php foreach ($array as $post) :?>
			<td><?= $post['id']?></td>
			<td><?= $post['nome']?></td>
			<td><?= $post['email']?></td>
			<td> Editar || Excluir</td>
		</tr>
	<?php endforeach; ?>
</table>