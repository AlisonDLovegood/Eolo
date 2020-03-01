<?php
include("config.php");
$codigo = $_GET['codigo'];
if(isset($_POST['nome'])){
	$pilcodigo = $_POST['pilcodigo'];
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];
	$confirsenha2 = $_POST['confirsenha2'];
	$cpf = $_POST['cpf'];
	$empvinculada = $_POST['empvinculada'];
	$consulta = $MySQLi -> query("UPDATE TB_PILOTOS SET pil_nome = '$nome', pil_sobrenome = '$sobrenome', pil_email = '$email', pil_senha = '$senha', pil_confirsenha = '$confirsenha2', pil_cpf = '$cpf', pil_emp_codigo = $empvinculada WHERE pil_codigo = $pilcodigo");
	header("Location: listar-pilotos.php");
}
$consulta2 = $MySQLi->query("SELECT * FROM TB_PILOTOS WHERE pil_codigo = '$codigo'");
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
		 				<label class="form-control"><b>EDITAR PILOTO:</b></label>
		 			</div>
	 				<div  class="form-row">
	 					<div class="form-group col-sm-2">
	 						<label>Código: </label>
							<input class="form-control" name="pilcodigo" value="<?php echo $resultado1['pil_codigo']; ?>" READONLY STYLE="pointer-events: none;background: #ccc;">
	 					</div>
	 					<div class="form-group col-sm-5">
	 						<label>Nome: </label>
							<input class="form-control" name = "nome" value="<?php echo $resultado1['pil_nome']; ?>">
	 					</div>
	 					<div class="form-group col-sm-5">
	 						<label>Sobrenome: </label>
							<input class="form-control" name = "sobrenome" value="<?php echo $resultado1['pil_sobrenome']; ?>">
	 					</div>
	 				</div>
	 				<div class="form-row">
	 					<div class="form-group col-sm-8">
	 						<label>E-mail: </label>
							<input class="form-control" name = "email" value="<?php echo $resultado1['pil_email']; ?>">
	 					</div>
	 					<div class="form-group col-sm-4">
	 						<label>CPF: </label>
							<input class="form-control" name = "cpf" value="<?php echo $resultado1['pil_cpf']; ?>">
	 					</div>
	 				</div>
	 				<div class="form-row">
	 					<div class="form-group col-sm-4">
	 						<label>Senha: </label>
							<input class="form-control" name = "senha" value="<?php echo $resultado1['pil_senha']; ?>">
	 					</div>
	 					<div class="form-group col-sm-4">	 						
							<label>Confirmar senha: </label>
							<input class="form-control" name = "confirsenha2" value="<?php echo $resultado1['pil_confirsenha']; ?>">
	 					</div>
	 					<div class="form-group col-sm-4">	 						
							<label>Empresa vinculada: </label>
							<input class="form-control" name = "empvinculada" value="<?php echo $resultado1['pil_emp_codigo']; ?>">
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
</form>
</html>