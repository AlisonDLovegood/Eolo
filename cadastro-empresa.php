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
        header("Location: cadastrado-sucesso.php");
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

    <!-- Nuestro css-->
    <link rel="stylesheet" type="text/css" href="css/login.css" th:href="@{/css/index.css}">
    <style type="text/css">
        .aaa{
            margin-top: -5em;
        }
    </style>
</head>
<body>
<div class="aaa">
    <div class="modal-dialog text-center modal-lg">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="images/uuser.png" th:src="@{/images/uuser.png}"/>
                </div>
                <form class="col-12" action="?" method="POST">
                    <div class="alert alert-warning" role="alert">
                          <i class="fas fa-exclamation-circle"></i><strong> Apenas empresas!</strong>
                    </div> 


                    <div class="form-row">
                    <div class="form-group col-8" id="user-group">
                        <input type="text" class="form-control" placeholder="Nome da empresa" name="nome"/>
                    </div>
                    <div class="form-group col-4" id="user-group">
                        <input type="text" class="form-control" placeholder="Sigla" name="sigla"/>
                    </div>
                    </div>


                    <div class="form-row">
                        <div class="form-group col-6" id="user-group">
                        <input type="text" class="form-control" placeholder="Telefone Primário" name="tel1"/>
                    </div>
                    <div class="form-group col-6" id="user-group">
                        <input type="text" class="form-control" placeholder="Telefone Secundário" name="tel2"/>
                    </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-6" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Senha" name="senha"/>
                    </div>
                    <div class="form-group col-6" id="contrasena-group">
                        <input type="password" class="form-control" placeholder="Conf. Senha" name="confirsenha"/>
                    </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-12" id="user-group">
                            <input type="text" class="form-control" placeholder="Email" name="email"/>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i> Confirmar </button>
                </form>
                <div class="col-12 forgot">
                    <a href="principal.php">Voltar ao menu principal</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
