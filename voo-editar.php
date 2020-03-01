<?php
include("config.php");
$codigo = $_GET['codigo'];
if(isset($_POST['pisdec'])){
	$voocod = $_POST['voocod'];
	$pisdec = $_POST['pisdec'];
	$peso = $_POST['peso'];
	$passageirosqnt = $_POST['passageirosqnt'];
	$aeronave = $_POST['aeronave'];
	$fabricante = $_POST['fabricante'];
	$estsaida = $_POST['estsaida'];
	$aeropsaida = $_POST['aeropsaida'];
	$aeropchegada = $_POST['aeropchegada'];
	$distancia = $_POST['distancia'];
	$numerocomercial = $_POST['numerocomercial'];
	$empresa = $_POST['empresa'];
	$piloto = $_POST['piloto'];
	$dtautorizada = $_POST['dtautorizada'];
	$dtsaida = $_POST['dtsaida'];
	$dtchegada = $_POST['dtchegada'];
	$consulta = $MySQLi -> query("UPDATE TB_VOOS SET voo_pis_descolagem = '$pisdec', voo_peso = '$peso', voo_qnt_passageiros = '$passageirosqnt', voo_aen_codigo = '$aeronave', voo_fab_codigo = '$fabricante', voo_est_saida = '$estsaida', voo_aer_codigo_origem = '$aeropsaida', voo_aer_codigo_destino = '$aeropchegada', voo_dis_km = 'distancia', voo_numerocomercial = '$numerocomercial', voo_emp_codigo = '$empresa', voo_pil_codigo = '$piloto', voo_dt_autorizada = '$dtautorizada', voo_dt_saida = '$dtsaida', voo_dt_chegada = '$dtchegada' WHERE voo_id = $voocod");
	header("Location: listar-voos.php");
}
$consulta2 = $MySQLi->query("SELECT * FROM TB_VOOS WHERE voo_id = '$codigo'");
$resultado1 = $consulta2->fetch_assoc();
?>
<html>
<head>
	  <meta charset="utf-8">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	  <link rel="stylesheet" href="css/principal.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	  <script src="https://kit.fontawesome.com/38e3465aaa.js" crossorigin="anonymous"></script>
	  <style type="text/css">
	  	body{
	  		background-color: #212529;
	  	}
	  	.container{
	  		width: 70%;
	  		background-color:#DCDCDC;	
	  		padding-top: 1em;
	  		margin-top: 1em;
	  		border-radius: 10px;
	  		-webkit-box-shadow: 8px 8px 10px black;
	  	}
	  	#a{
			-webkit-box-shadow: 4px 4px 5px black;
	  	}
	  </style>
</head>
<body>
	<div class="container">
		<form action = "?" method="POST">
	  		<div class="row justify-content-center mb-5">
	 			<div class="col-sm-12 col-sm-10 col-sm-8">
	 				
	 				<div class="form-row">
		 				<label class="form-control"><b>EDITAR VOO:</b></label>
		 			</div>
	 				<div class="line"></div>
	 				<div class="form-row">
	 					<div class="form-group col-sm-2">
							<label>Código: </label>
							<input class="form-control" name="voocod" value="<?php echo $resultado1['voo_id']; ?>" READONLY STYLE="pointer-events: none;background: #ccc;">
						</div>
	 					<div class="form-group col-sm-10">
							<label>Pista de decolagem: </label>
							<input class="form-control" name = "pisdec" value="<?php echo $resultado1['voo_pis_descolagem']; ?>">
						</div>
					</div>
					<div class="form-row">	
	 					<div class="form-group col-sm-3">
							<label>Peso: </label>
							<input  class="form-control" name = "peso" value="<?php echo $resultado1['voo_peso']; ?>">
						</div>
	 					<div class="form-group col-sm-3">
							<label>Qnt. de passageiros: </label>
							<input class="form-control" name = "passageirosqnt" value="<?php echo $resultado1['voo_qnt_passageiros']; ?>">
						</div>
	 					<div class="form-group col-sm-3">
							<label>Aeronave: </label>
							<input class="form-control" name = "aeronave" value="<?php echo $resultado1['voo_aen_codigo']; ?>">
						</div>
	 					<div class="form-group col-sm-3">
							<label>Fabricante: </label>
							<input class="form-control" name = "fabricante" value="<?php echo $resultado1['voo_fab_codigo']; ?>">
						</div>
					</div>
					<div class="form-row">	
	 					<div class="form-group col-sm-2">
							<label>Estado de saída: </label>
							<input class="form-control" name = "estsaida" value="<?php echo $resultado1['voo_est_saida']; ?>">
						</div>
	 					<div class="form-group col-sm-4">
							<label>Aeroporto de saída: </label>
							<input class="form-control" name = "aeropsaida" value="<?php echo $resultado1['voo_aer_codigo_origem']; ?>">
						</div>
	 					<div class="form-group col-sm-4">
							<label>Aeroporto de chegada: </label>
							<input class="form-control" name = "aeropchegada" value="<?php echo $resultado1['voo_aer_codigo_destino']; ?>">
						</div>
	 					<div class="form-group col-sm-2">
							<label>Distância: </label>
							<input class="form-control" name = "distancia" value="<?php echo $resultado1['voo_dis_km']; ?>">
						</div>
					</div>
					<div class="form-row">
	 					<div class="form-group col-sm-2">
							<label>Nº comercial: </label>
							<input class="form-control" name = "numerocomercial" value="<?php echo $resultado1['voo_numerocomercial']; ?>">
						</div>
	 					<div class="form-group col-sm-4">
							<label>Empresa: </label>
							<input class="form-control" name = "empresa" value="<?php echo $resultado1['voo_emp_codigo']; ?>">
						</div>
	 					<div class="form-group col-sm-6">
							<label>Piloto: </label>
							<input class="form-control" name = "piloto" value="<?php echo $resultado1['voo_pil_codigo']; ?>">
						</div>
					</div>
					<div class="form-row">
	 					<div class="form-group col-sm-4">
							<label>Data autorizada: </label>
							<input class="form-control" name = "dtautorizada" value="<?php echo $resultado1['voo_dt_autorizada']; ?>">
						</div>
	 					<div class="form-group col-sm-4">
							<label>Data de saída: </label>
							<input class="form-control" name = "dtsaida" value="<?php echo $resultado1['voo_dt_saida']; ?>">
						</div>
	 					<div class="form-group col-sm-4">
							<label>Data de chegada: </label>
							<input class="form-control" name = "dtchegada" value="<?php echo $resultado1['voo_dt_chegada']; ?>">
						</div>
					</div>
					<div class="form-row">
						<input class="form-control btn-success" value="Salvar" type="SUBMIT">
					</div>
					<div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div><div class="line"></div>
	 		 	</div>
			</div>
		</form>
	</div>
<center>
	<a class="form-control col-1 btn-danger" href="listar-voos.php?excluir=<?php echo $resultado1['voo_id']; ?>">Excluir</a>
</center>
</body>
</html>