<?php
include("config.php");
$codigo = $_GET['codigo'];
if(isset($_POST['nome'])){
	$fabcod = $_POST['fabcod'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$consulta = $MySQLi -> query("UPDATE TB_FABRICANTES SET fab_nome = '$nome', fab_email = '$email' WHERE fab_codigo = $fabcod");
	header("Location: listar-fabricantes.php");
}
$consulta2 = $MySQLi->query("SELECT * FROM TB_FABRICANTES WHERE fab_codigo = '$codigo'");
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
		 				<label class="form-control"><b>EDITAR FABRICANTE:</b></label>
		 			</div>
	 				<div class="line"></div>
 					<div class="form-row">
 						<div class="form-group col-sm-2">
 							<label>Código: </label>
						<input class="form-control" name="fabcod" value="<?php echo $resultado1['fab_codigo']; ?>" READONLY STYLE="pointer-events: none;background: #ccc;">
 						</div>
 						<div class="form-group col-sm-10">
 							<label>Nome: </label>
						<input class="form-control" name = "nome" value="<?php echo $resultado1['fab_nome']; ?>">
 						</div>
 					</div>
 					<div class="form-row">
 						<div class="form-group col-sm-12">
 							<label>E-mail: </label>
						<input class="form-control" name = "email" value="<?php echo $resultado1['fab_email']; ?>">
 						</div>
 					</div>									
					<div class="form-row">
						<input  class="form-control btn-success" value="Salvar" type="SUBMIT">
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