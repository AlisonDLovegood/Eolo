<?php

include("config.php");
if (isset($_POST['dtchegada'])){
	$pisdec = $_POST['pisdec'];
	$peso = $_POST['peso'];
	$passageirosqnt = $_POST['passageirosqnt'];
	$aeronave = $_POST['aeronaves'];
	$fabricante = $_POST['fabricante'];
	$estsaida = $_POST['estsaida'];
	$aeropsaida = $_POST['aersaida'];
	$aeropchegada = $_POST['aerchegada'];
	$distancia = $_POST['distancia'];
	$numerocomercial = $_POST['numerocomercial'];
	$empresa = $_POST['empresa'];
	$piloto = $_POST['piloto'];
	$dtautorizada = $_POST['dtautorizada'];
	$dtsaida = $_POST['dtsaida'];
	$dtchegada = $_POST['dtchegada'];


	$consulta = $MySQLi->query("INSERT INTO TB_VOOS(voo_pis_descolagem, voo_peso, voo_qnt_passageiros, voo_aen_codigo, voo_fab_codigo, voo_est_saida, voo_aer_codigo_origem, voo_aer_codigo_destino, voo_dis_km, voo_numerocomercial, voo_emp_codigo, voo_pil_codigo, voo_dt_autorizada, voo_dt_saida, voo_dt_chegada)

		VALUES ('$pisdec', '$peso', $passageirosqnt, $aeronave, '$fabricante' , '$estsaida' , '$aeropsaida', '$aeropchegada', '$distancia', '$numerocomercial', '$empresa', '$piloto', '$dtautorizada', '$dtsaida', '$dtchegada')");

	header("Location: listar-voos.php");
}

$consulta1 = $MySQLi -> query ("SELECT * FROM tb_voos");
 ?>

 <!DOCTYPE html>

 <html>

 <head>

 	<title></title>

 </head>
 <body>

 	<table border="1">
 		<tr>
 			<th>Pista de decolagem</th>
 			<th>Peso</th>
 			<th>Quantidade de passageiros</th>
 			<th>Aeronave</th>
 			<th>Fabricante</th>
 			<th>Estado de saída</th>
 			<th>Aeroporto de saída</th>
 			<th>Aeroporto de chegada</th>
 			<th>Distância</th>
 			<th>Número comercial</th>
 			<th>Empresa</th>
 			<th>Piloto</th>
 			<th>Data Autorizada</th>
 			<th>Data de Saída</th>
 			<th>Data de Chegada</th>
 		</tr>
<?php while ($resultado = $consulta1 -> fetch_assoc()){ ?>
	<tr>
		<td><?php echo $resultado['voo_pis_descolagem']; ?></td>
		<td><?php echo $resultado['voo_peso']; ?></td>
		<td><?php echo $resultado['voo_qnt_passageiros']; ?></td>
		<td><?php echo $resultado['voo_aen_codigo']; ?></td>
		<td><?php echo $resultado['voo_fab_codigo']; ?></td>
		<td><?php echo $resultado['voo_est_saida']; ?></td>
		<td><?php echo $resultado['voo_aer_codigo_origem']; ?></td>
		<td><?php echo $resultado['voo_aer_codigo_destino']; ?></td>
		<td><?php echo $resultado['voo_dis_km']; ?></td>
		<td><?php echo $resultado['voo_numerocomercial']; ?></td>
		<td><?php echo $resultado['voo_emp_codigo']; ?></td>
		<td><?php echo $resultado['voo_pil_codigo']; ?></td>
		<td><?php echo $resultado['voo_dt_autorizada']; ?></td>
		<td><?php echo $resultado['voo_dt_saida']; ?></td>
		<td><?php echo $resultado['voo_dt_chegada']; ?></td>
	</tr> <?php } ?>
	
</table>

