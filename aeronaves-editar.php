<?php
include("config.php");
$codigo = $_GET['codigo'];
if(isset($_POST['nome'])){
	$aencod = $_POST['aencod'];
	$nome = $_POST['nome'];
	$ano = $_POST['ano'];
	$peso = $_POST['peso'];
	$tipo = $_POST['tipo'];
	$largura = $_POST['largura'];
	$combustivel = $_POST['combustivel'];
	$fabricante = $_POST['fabricante'];
	$consulta = $MySQLi -> query("UPDATE TB_AERONAVES SET aen_nome = '$nome', aen_ano = '$ano', aen_peso = '$peso', aen_tipo = '$tipo', aen_largura = '$largura', aen_cap_combustivel = $combustivel, aen_fab_codigo = $fabricante WHERE aen_codigo = $aencod");
	header("Location: listar-aeronaves.php");
}
$consulta2 = $MySQLi->query("SELECT * FROM TB_AERONAVES WHERE aen_codigo = '$codigo'");
$resultado1 = $consulta2->fetch_assoc();

	$consulta6 = $MySQLi->query("SELECT * FROM TB_FABRICANTES");
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
		 				<label class="form-control"><b>EDITAR AERONAVE:</b></label>
		 			</div>
	 				<div class="line"></div>
	 				<div class="form-row">
	 					<div class="form-group col-sm-2">
	 						<label>Código: </label>
	 						<input class="form-control" name="aencod" value="<?php echo $resultado1['aen_codigo']; ?>" READONLY STYLE="pointer-events: none;background: #ccc;">
	 					</div>
	 					<div class="form-group col-sm-10">
	 						<label>Nome: </label>
							<input class="form-control" name = "nome" value="<?php echo $resultado1['aen_nome']; ?>">
	 					</div>
	 					
	 				</div>
	 				<div class="form-row">
	 					<div class="form-group col-sm-4">
	 						<label>Peso: </label>
							<input class="form-control" name = "peso" value="<?php echo $resultado1['aen_peso']; ?>">
	 					</div>
	 					<div class="form-group col-sm-4">
	 						<label>tipo: </label>
							<input class="form-control" name = "tipo" value="<?php echo $resultado1['aen_tipo']; ?>">
	 					</div>
	 					<div class="form-group col-sm-4">
	 						<label>Ano: </label>
							<input class="form-control" name = "ano" value="<?php echo $resultado1['aen_ano']; ?>">
	 					</div>
	 				</div>
	 				<div class="form-row">
	 					<div class="form-group col-sm-4">
	 						<label>largura: </label>
							<input class="form-control" name = "largura" value="<?php echo $resultado1['aen_largura']; ?>">
	 					</div>
	 					<div class="form-group col-sm-4">
	 						<label>combustivel: </label>
							<input class="form-control" name = "combustivel" value="<?php echo $resultado1['aen_cap_combustivel']; ?>">
	 					</div>
	 					<div class="form-group col-sm-4">
	 						<label>Fabricante: </label>
							<select class="form-control" name="fabricante">
								<?php while ($resultado6 = $consulta6->fetch_assoc()){
									echo'<option value="'.$resultado6['fab_codigo'].'">'.$resultado6['fab_nome'].'</option>';
								}?>

							</select>
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
	<input type="submit" class="form-control col-1 btn-danger" id="a" value="Excluir" READONLY STYLE="pointer-events: none;background: #AC1E2C;">
</center>
</body>
</html>