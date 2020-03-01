<?php

include("config.php");
if (isset($_POST['email'])){
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$consulta = $MySQLi->query("INSERT INTO TB_FABRICANTES(fab_nome, fab_email)
		VALUES ('$nome', '$email')");
	header("Location: listar-fabricantes.php");
}


$consulta1 = $MySQLi -> query ("SELECT * FROM TB_FABRICANTES");
 ?>

 <!DOCTYPE html>

 <html>

 <head>

 	<title></title>

 </head>
 <body>

 	<center><table border="1">
 		<tr>
 			<th>Nome</th>
 			<th>E-mail</th>
 			<th>Ações</th>
 		</tr>
<?php while ($resultado = $consulta1 -> fetch_assoc()){ ?>
	<tr>
		<td><?php echo $resultado['fab_nome']; ?></td>
		<td><?php echo $resultado['fab_email']; ?></td>
		<td>EDITAR / EXCLUIR</td>
	</tr> <?php } ?>
	
</table></center>


 </body>

 </html>