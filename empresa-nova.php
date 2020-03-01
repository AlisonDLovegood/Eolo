<?php

include("config.php");
if (isset($_POST['email'])){
	$nome = $_POST['nome'];
	$sigla = $_POST['sigla'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$confirsenha = $_POST['confirsenha'];
	$tel1 = $_POST['tel1'];
	$tel2 = $_POST['tel2'];
	$consulta = $MySQLi->query("INSERT INTO TB_EMPRESAS(emp_nome, emp_sigla, emp_email, emp_senha, emp_confirsenha, emp_tel1, emp_tel2)
		VALUES ('$nome', '$sigla', '$email', '$senha', '$confirsenha','$tel1', '$tel2')");
	header("Location: listar-empresas.php");
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
 			<th>Sigla</th>
 			<th>E-mail</th>
 			<th>Senha</th>
 			<th>Confirmar senha</th>
 			<th>Telefone primário</th>
 			<th>Telefone Secundário</th>
 			<th>Ações</th>
 		</tr>
<?php while ($resultado = $consulta1 -> fetch_assoc()){ ?>
	<tr>
		<td><?php echo $resultado['emp_nome']; ?></td>
		<td><?php echo $resultado['emp_sigla']; ?></td>
		<td><?php echo $resultado['emp_email']; ?></td>
		<td><?php echo $resultado['emp_senha']; ?></td>
		<td><?php echo $resultado['emp_confirsenha']; ?></td>
		<td><?php echo $resultado['emp_tel1']; ?></td>
		<td><?php echo $resultado['emp_tel2']; ?></td>
		<td>EDITAR / EXCLUIR</td>
	</tr> <?php } ?>
	
</table></center>


 </body>

 </html>