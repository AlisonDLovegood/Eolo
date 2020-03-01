<?php

include("config.php");
if (isset($_POST['email'])){
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$confirsenha2 = $_POST['confirsenha2'];
	$cpf = $_POST['cpf'];
	$empvinculada = $_POST['empvinculada'];
	$consulta = $MySQLi->query("INSERT INTO TB_PILOTOS(pil_nome, pil_sobrenome, pil_email, pil_senha, pil_confirsenha, pil_cpf, pil_emp_codigo)
		VALUES ('$nome', '$sobrenome', '$email', '$senha', '$confirsenha2', '$cpf', $empvinculada)");
	header("Location: listar-pilotos.php");
}

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
 			<th>Sobrenome</th>
 			<th>E-mail</th>
 			<th>Senha</th>
 			<th>cpf</th>
 			<th>Empresa vinculada</th>
 			<th>Editar</th>
 		</tr>
<?php while ($resultado = $consulta1 -> fetch_assoc()){ ?>
	<tr>
		<td><?php echo $resultado['pil_nome']; ?></td>
		<td><?php echo $resultado['pil_sobrenome']; ?></td>
		<td><?php echo $resultado['pil_email']; ?></td>
		<td><?php echo $resultado['pil_senha']; ?></td>
		<td><?php echo $resultado['pil_cpf']; ?></td>
		<td><?php echo $resultado['pil_emp_codigo']; ?></td>
		<td>EDITAR</td>
	</tr> <?php } ?>
	
</table></center>


 </body>

 </html>