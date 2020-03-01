<?php

include("config.php");
if (isset($_POST['latitude'])){
	$nome = $_POST['nome'];
	$latitude = $_POST['latitude'];
	$longitude = $_POST['longitude'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$consulta = $MySQLi->query("INSERT INTO TB_AEROPORTOS(aer_nome, aer_latitude, aer_longitude, aer_cidade, aer_estado)
		VALUES ('$nome', '$latitude', '$longitude', '$cidade', '$estado')");
	header("Location: listar-aeroportos.php");
}


$consulta1 = $MySQLi -> query ("SELECT * FROM TB_AEROPORTOS");
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
 			<th>LATITUDE</th>
 			<th>LONGITUDE</th>
 			<th>CIDADE</th>
 			<th>ESTADO</th>
 			<th>EDITAR</th>
 		</tr>
<?php while ($resultado = $consulta1 -> fetch_assoc()){ ?>
	<tr>
		<td><?php echo $resultado['aer_nome']; ?></td>
		<td><?php echo $resultado['aer_latitude']; ?></td>
		<td><?php echo $resultado['aer_longitude']; ?></td>
		<td><?php echo $resultado['aer_cidade']; ?></td>
		<td><?php echo $resultado['aer_estado']; ?></td>
		<td>EDITAR</td>
	</tr> <?php } ?>
	
</table></center>


 </body>

 </html>