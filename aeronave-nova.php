<?php

include("config.php");
if (isset($_POST['peso'])){
	$nome = $_POST['nome'];
	$ano = $_POST['ano'];
	$peso = $_POST['peso'];
	$tipo = $_POST['tipo'];
	$largura = $_POST['largura'];
	$combustivel = $_POST['combustivel'];
	$fabricante = $_POST['fabricante'];
	$consulta = $MySQLi->query("INSERT INTO TB_AERONAVES(aen_nome, aen_ano, aen_peso, aen_tipo, aen_largura, aen_cap_combustivel, aen_fab_codigo)
		VALUES ('$nome', '$ano', '$peso', '$tipo', '$largura', '$combustivel', '$fabricante')");
	header("Location: listar-aeronaves.php");
}


$consulta1 = $MySQLi -> query ("SELECT * FROM TB_AERONAVES");
 ?>

 <!DOCTYPE html>

 <html>

 <head>

 	<title></title>

 </head>
 <body>

 	<center><table border="1">
 		<tr>
 			<th>NOME</th>
 			<th>ANO</th>
 			<th>PESO</th>
 			<th>TIPO</th>
 			<th>LARGURA</th>
 			<th>COMBUSTIVEL</th>
 			<th>FABRICANTE</th>
 			<th>EDITAR</th>
 		</tr>
<?php while ($resultado = $consulta1 -> fetch_assoc()){ ?>
	<tr>
		<td><?php echo $resultado['aen_nome']; ?></td>
		<td><?php echo $resultado['aen_ano']; ?></td>
		<td><?php echo $resultado['aen_peso']; ?></td>
		<td><?php echo $resultado['aen_tipo']; ?></td>
		<td><?php echo $resultado['aen_largura']; ?></td>
		<td><?php echo $resultado['aen_cap_combustivel']; ?></td>
		<td><?php echo $resultado['aen_fab_codigo']; ?></td>
		<td>EDITAR</td>
	</tr> <?php } ?>
	
</table></center>


 </body>

 </html>