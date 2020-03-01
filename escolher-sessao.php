<!DOCTYPE html>
<html>
<head>
	  <META HTTP-EQUIV="REFRESH" >
	  <title>Iniciar sessão!</title>
	  <meta charset="utf-8">
	  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	  <link rel="stylesheet" href="css/principal.css">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	  <script src="https://kit.fontawesome.com/38e3465aaa.js" crossorigin="anonymous"></script>
	  	    <link rel="stylesheet" type="text/css" href="css/login.css" th:href="@{/css/index.css}">
	  <style type="text/css">

	  	body{
	  		background-color: #d5ffa3;
	  	}
	  	p{
	  		color: black;
	  	}
	  </style>
</head>
<body>
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
	    	<div class="modal-header">
		        <h5 class="modal-title">Escolha a forma de login:</h5>
	        </div>
	        <div class="modal-body">
	       		<button type="button" class="form-control btn-warning"><a href="login-admin.php">ADMIN</a></button>
		        <button type="button" class="form-control btn-primary"><a href="login_empresa.php">Empresa</a></button>
	   	        <button type="button" class="form-control btn-info"><a href="login_piloto.php">Piloto</a></button>
	        </div>
	    </div>
	</div>
</body>
</html>