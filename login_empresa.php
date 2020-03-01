<?php
session_start();
include("config.php");
$msg = 0;
if(isset($_POST['username'])) {
	$nome = $_POST['username'];
	$senha = $_POST['password'];
	$consulta = $MySQLi->query("SELECT * FROM
	TB_EMPRESAS where EMP_NOME = '$nome'
	and EMP_SENHA = '$senha'");
	if($resultado = $consulta->fetch_assoc()){
		$_SESSION['empcod'] =
			$resultado['EMP_CODIGO'];
		$_SESSION['empnome'] =
			$resultado['EMP_NOME'];
		header("Location: principal-empresa.php");
	}
	$msg = 1;
} 
?>

<!DOCTYPE html>
<html lang="en" xmlns:th="http://www.thymeleaf.org">
<head>
    <title>Eolo</title>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://use.fontawesome.com/a12897337a.js"></script>


    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="css/login.css" th:href="@{/css/index.css}">

</head>
<body>
    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="images/uuser.png" th:src="@{/img/uuser.png}"/>
                </div>
                <form class="col-12" action="?" method="POST">
                    <div class="alert alert-warning" role="alert">
                          <i class="fas fa-exclamation-circle"></i><strong>Apenas Empresas!</strong>
                    </div>   
                    <div class="form-group" id="user-group">
                        <input type="text" class="form-control" placeholder="Nome de usuario" name="username"/>
                    </div>
                    <div class="form-group" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Senha" name="password"/>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Acessar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="principal.php">Voltar ao menu principal</a>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>
