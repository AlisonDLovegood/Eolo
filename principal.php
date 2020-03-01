    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="authors" content="Alison Lovegood, Eudes Medeiros,  Ricardo Alencar">
    <meta name="description" content="O desenvolvimento da plataforma Eolo surgiu da necessidade de integrar equipes responsáveis pelo domínio de pequenos aeroportos em um meio onde possam transmitir as informações de seus voos e pistas, a fim de digitalizar aqueles que não possuem um software de comando de torre e harmonizar os processos de pousos de emergência, já que a equipe que se encontra no ar poderá ter acesso a informação de que a pista estará ocupada ou não por meios digitais.">
    <meta name="keywords" content="Empresas aéreas, Software, Tráfego aéreo.">
    	    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    
    <!-- Los iconos tipo Solid de Fontawesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    	<title>Main</title>

    	<style type="text/css">
    		body{
    			background-color:#F0FFFF;
    		}
    		.navbar{
				padding: 15px 10px;
				background: #fff;
				border: none;
				border-radius: 0;
				margin-bottom: 40px;
				box-shadow: 1px 1px 3px rgba(0,0,0,0.1);
			}
			#map {
            	height: 52em;
            	margin-top: -2.5em;
	            margin-left: -1em;
	            margin-right: -1em;
        	}
        	html{
            	overflow-y: hidden;
        		overflow-x: hidden;
        	}
        	.btn{
        		margin-top: 0.5em;
        	}

    	</style>

    </head>
    <body>
    	<div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="principal.php"><i class="fas fa-tasks"></i> projeto Eolo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                      	<li class="nav-item dropdown" >
			            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navdrop">Aeroportos</a>
				            <div class="dropdown-menu">
                                <?php
                                    include("config.php");
                                    $consulta1 = $MySQLi->query("SELECT * FROM TB_AEROPORTOS");
                                    while ($resultado1 = $consulta1->fetch_assoc()){
                                        echo'<a class="dropdown-item" >'.$resultado1['aer_nome'].'</a>';

                                }?>
				            </div>
			          	</li>
                        <li class="nav-item ">
                            <a class="nav-link" href="escolher-sessao.php">Iniciar sessão</a>
                        </li>
                        <li class="nav-item ">
                            <a class="btn btn-outline-primary" href="cadastro-empresa.php">Criar uma conta</a>
                        </li>

                    </ul>
                </div>
            </nav>

		<div class="container-fluid">
			<div id="map"></div>
                            <script>
                                function initMap() {
                                var map = new google.maps.Map(document.getElementById('map'), {
                                  center: new google.maps.LatLng(-6.445113, -37.069001),
                                  zoom: 6
                                });
                                var infoWindow = new google.maps.InfoWindow;
                                  // Change this depending on the name of your PHP or XML file
                                  downloadUrl('resultado.php', function(data) {
                                    var xml = data.responseXML;
                                    var markers = xml.documentElement.getElementsByTagName('marker');
                                    Array.prototype.forEach.call(markers, function(markerElem) {
                                      var name = markerElem.getAttribute('name');
                                      var address = markerElem.getAttribute('address');
                                      var type = markerElem.getAttribute('type');
                                      var point = new google.maps.LatLng(
                                          parseFloat(markerElem.getAttribute('lat')),
                                          parseFloat(markerElem.getAttribute('lng')));

                                      var infowincontent = document.createElement('div');
                                      var strong = document.createElement('strong');
                                      strong.textContent = name
                                      infowincontent.appendChild(strong);
                                      infowincontent.appendChild(document.createElement('br'));

                                      var text = document.createElement('text');
                                      text.textContent = address
                                      infowincontent.appendChild(text);
                                      
                                      var iconBase = 'download.png';
                                      var marker = new google.maps.Marker({
                                        map: map,
                                        position: point,
                                        icon: iconBase 
                                      });
                                      marker.addListener('click', function() {
                                        infoWindow.setContent(infowincontent);
                                        infoWindow.open(map, marker);
                                      });
                                    });
                                  });downloadUrl('resul.php', function(data) {
                                    var xml = data.responseXML;
                                    var markers = xml.documentElement.getElementsByTagName('marker');
                                    Array.prototype.forEach.call(markers, function(markerElem) {
                                      var name = markerElem.getAttribute('name');
                                      var address = markerElem.getAttribute('address');
                                      var type = markerElem.getAttribute('type');
                                      var point = new google.maps.LatLng(
                                          parseFloat(markerElem.getAttribute('lat')),
                                          parseFloat(markerElem.getAttribute('lng')));

                                      var infowincontent = document.createElement('div');
                                      var strong = document.createElement('strong');
                                      strong.textContent = name
                                      infowincontent.appendChild(strong);
                                      infowincontent.appendChild(document.createElement('br'));

                                      var text = document.createElement('text');
                                      text.textContent = address
                                      infowincontent.appendChild(text);
                                      
                                      var iconBase = 'viaozin.png';
                                      var marker = new google.maps.Marker({
                                        map: map,
                                        position: point,
                                        icon: iconBase 
                                      });
                                      marker.addListener('click', function() {
                                        infoWindow.setContent(infowincontent);
                                        infoWindow.open(map, marker);
                                      });
                                    });
                                  });
                                }
                              function downloadUrl(url, callback) {
                                var request = window.ActiveXObject ?
                                    new ActiveXObject('Microsoft.XMLHTTP') :
                                    new XMLHttpRequest;
                                request.onreadystatechange = function() {
                                  if (request.readyState == 4) {
                                    request.onreadystatechange = doNothing;
                                    callback(request, request.status);
                                  }
                                };
                                request.open('GET', url, true);
                                request.send(null);
                              }
                              function doNothing() {}
                            </script>
                            <script async defer
                            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUT9bjoG8LBc6uACCIbv15IYDBAOGVRV0&callback=initMap">
                            </script>

		</div>



	<div class="modal fade" id="juc" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
 		<div class="modal-dialog modal-dialog-scrollable modal-xl" role="document">
    		<div class="modal-content">
			    <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalScrollableTitle">Aeroporto de Jucurutu</h5>
			        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          		<span aria-hidden="true">&times;</span>
			        	</button>
			    </div>

    			<div class="modal-body"> 
        			<div class="row justify-content-center mb-5">
          				<div class="col-sm-12 col-sm-10 col-sm-8">
            				<table class="table">
							  <thead class="thead-light">
							    <tr>
							      <th scope="col"><i class="fas fa-paper-plane"></i></th>
							      <th scope="col">Nº Comercial</th>
							      <th scope="col">Empresa</th>
							      <th scope="col">Piloto</th>
							      <th scope="col">Detalhes</th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th scope="row">1</th>
							      <td>000000</td>
							      <td>GOL</td>
							      <td>@Eudes</td>
							      <td><button class="btn btn-success"><i class="fas fa-plus"></i></button></td>

							    </tr>
							    <tr>
							      <th scope="row">2</th>
							      <td>000000</td>
							      <td>LATAN</td>
							      <td>@Alison</td>
							      <td><button class="btn btn-success"><i class="fas fa-plus"></i></button></td>

							    </tr>
							    <tr>
							      <th scope="row">3</th>
							      <td>000000</td>
							      <td>ALA</td>
							      <td>@Ricardo</td>
							      <td><button class="btn btn-success"><i class="fas fa-plus"></i></button></td>

							    </tr>
							  </tbody>
							</table>
    					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

