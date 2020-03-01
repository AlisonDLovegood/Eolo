<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Aeronaves</title>
    <style type="text/css">
        html{
            overflow-y: hidden;
        }
        #map {
            height: 45em;
            margin-top: -3em;
            margin-left: 0em;
            margin-right: 0em;
        }

        #lista{
            list-style-type: none;
            background: rgb(14,12,40);
        }

    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="principal-empresa.php"><i class="fas fa-tasks"></i>Aeronaves</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Principal <span class="sr-only">(current)</span></a>
                        </li>
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
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">

                                </div>
                                <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Configurações</a>
                                <a class="dropdown-item" href="sair-admin.php"><i class="fas fa-power-off mr-2"></i>Sair</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light" style="background: rgb(14,12,40);">
                    <a class="d-xl-none d-lg-none" href="#"> Só deus aqui</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>


                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider"> Ferramentas: </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fab fa-audible"></i>Aeroportos <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="aeroportos_principal-empresa.php">Listar aeroportos</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Aeronaves</a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="aeronaves_principal-empresa.php">Listar aeronaves</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-paper-plane"></i>Voos</a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="voos_principal-empresa.php">Listar voos</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-5"><i class="far fa-address-card"></i>Pilotos</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pilotos_principal-empresa.php">Listar pilotos</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-divider"> Sobre a Equipe: </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-people-carry"></i>Contate-nos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="far fa-newspaper"></i>Artigo</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">


                         <?php
include("config.php");
if(isset($_GET['excluir'])) {
    $codigo = $_GET['excluir'];
    $consulta2 = $MySQLi->query("DELETE FROM TB_AERONAVES
    WHERE aen_codigo = $codigo");
    header("Location: listar-aeronaves.php");
}
$consulta = $MySQLi->query("SELECT * FROM TB_AERONAVES");
?>
<html>
 <head>
      <title>Banco_das_Aeronaves</title>
      <meta charset="utf-8">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="css/principal.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
      <script src="https://kit.fontawesome.com/38e3465aaa.js" crossorigin="anonymous"></script>
      <style type="text/css">
        table{
            font-size: 0.7em;
            text-align: center;
        }
        i{
            font-size: 1.5em;
        }
      </style>
 </head>
 <body>
    <table class="table" id="map">
        <thead class="thead-dark">
            <tr class="table-light">
                <th>Nome</th>
                <th>Ano</th>
                <th>Peso</th>
                <th>Tipo</th>
                <th>Largura</th>
                <th>Combustivel</th>
                <th>Fabricante</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>         
            <?php while ($resultado = $consulta->fetch_assoc()){?>
            <tr>
                <td><?php echo $resultado['aen_nome']; ?></td>
                <td><?php echo $resultado['aen_ano']; ?></td>
                <td><?php echo $resultado['aen_peso']; ?></td>
                <td><?php echo $resultado['aen_tipo']; ?></td>
                <td><?php echo $resultado['aen_largura']; ?></td>
                <td><?php echo $resultado['aen_cap_combustivel']; ?></td>
                <td><?php echo $resultado['aen_fab_codigo']; ?></td>
                <td><a href="aeronaves-editar.php?codigo=<?PHP echo $resultado['aen_codigo']; ?>"><i class="fas fa-edit"></i></a></td>
            </tr>
            <?php } ?>
        </tbody>
   </table>
<center><li class="nav-item" id="lista">
                                            <a style="color: white;" class="nav-link" href="#" data-toggle="modal" data-target="#cadastraraeronave">Cadastrar Nova</a>
                                        </li></center>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
        </div>
    </div>
<!-- Modal -->
<div class="modal fade" id="cadastraraeronave" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <form method="POST" action="aeronave-nova.php">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Cadastro de Aeronave</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-sm-10 col-sm-8">

              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label for="inputNomeAeronave">Nome:</label>
                  <input type="text" class="form-control" id="inputNomeAeronave" placeholder="Nome" name="nome">
                </div>
                <div class="form-group col-sm-3">
                  <label for="inputAnoAeronave">Ano:</label>
                  <input type="number" class="form-control" id="inputAnoAeronave" name="ano">
                </div>
                <div class="form-group col-sm-3">
                  <label for="inputPesoAeronave">Peso:</label>
                  <input type="text" class="form-control" id="inputPesoAeronave" placeholder="Kg" name="peso">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-12">
                  <label for="inputTipoAeronave">Tipo:</label>
                  <input type="text" class="form-control" id="inputTipoAeronave" placeholder="Tipo" name="tipo">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-4">
                  <label for="inputLarguraAeronave">Largura:</label>
                  <input type="text" class="form-control" id="inputLarguraAeronave" placeholder="Largura" name="largura">
                </div>
                <div class="form-group col-sm-4">
                  <label for="inputCapacidadeAeronave">Combustível:</label>
                  <input type="text" class="form-control" id="inputCapacidadeAeronave" placeholder="Capacidade" name="capcombustivel">
                </div>
                <div class="form-group col-sm-4">
                  <label for="inputFabricanteAeronave">Fabricante:</label>
                  <select class="form-control" name="fabricante">
                    <?php 
                        $consult = $MySQLi->query("SELECT * FROM TB_FABRICANTES");
                        while ($resultado1 = $consult->fetch_assoc()){
                        echo'<option value="'.$resultado1['fab_codigo'].'">'.$resultado1['fab_nome'].'</option>';
                    }?>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-12">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">Não sou um robô
                    </label>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Confirmar</button>
        </div>

      </form>        
    </div>
  </div>
</div>


<div class="modal fade" id="cadastrarfabricante" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <form method="POST" action="fabricante-novo.php">

        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Cadastro de Fabricante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>

        <div class="modal-body"> 
          <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-sm-10 col-sm-8">

              <div class="form-row">
                <div class="form-group col-sm-4">
                  <label for="inputNomeFabri">Nome:</label>
                  <input type="text" class="form-control" id="inputNomeFabri" placeholder="Nome" name="nome">
                </div>
                <div class="form-group col-sm-8">
                  <label for="inputEmailFabri">Email:</label>
                  <input type="text" class="form-control" id="inputEmailFabri" placeholder="exemplo@eolo.com" name="email">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-12">
                  <div class="form-check">
                    <label class="form-check-label">
                     <input class="form-check-input" type="checkbox">Não sou um robô
                    </label>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      <button type="submit" class="btn btn-success">Confirmar</button>
    </div>

      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="cadastrarempresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <form action="empresa-nova.php" method="POST">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Cadastro de Empresa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body"> 
          <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-sm-10 col-sm-8">

              <div class="form-row">
                <div class="form-group col-sm-10">
                  <label for="inputNomeEmpre">Nome:</label>
                  <input type="text" class="form-control" id="inputNomeEmpre" placeholder="Nome" name="nome">
                </div>
                <div class="form-group col-sm-2">
                  <label for="inputSiglaEmpre">Sigla:</label>
                  <input type="text" class="form-control" id="inputSiglaEmpre" placeholder="Sigla" name="sigla">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-12">
                  <label for="inputEmailEmpre">Email:</label>
                  <input type="text" class="form-control" id="inputEmailEmpre" placeholder="exemplo@eolo.com" name="email">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label for="inputSenhaEmpresa">Senha:</label>
                  <input type="text" class="form-control" id="inputSenhaEmpresa" name="senha">
                </div>
                <div class="form-group col-sm-6">
                  <label for="inputSenhaEmpresa1">Confirmar Senha:</label>
                  <input type="text" class="form-control" id="inputSenhaEmpresa1" name="confirsenha">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label for="inputTelefoneEmpre">Telefone Primário:</label>
                  <input type="text" class="form-control" id="inputTelefoneEmpre" placeholder="(00)00000-0000" name="tel1">
                </div>
                <div class="form-group col-sm-6">
                  <label for="inputTelefoneEmpre2">Telefone Secundário:</label>
                  <input type="text" class="form-control" id="inputTelefoneEmpre2" placeholder="(00)00000-0000" name="tel2">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-12">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">Não sou um robô
                    </label>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Confirmar</button>
        </div>

      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="cadastrarpiloto" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <form action="piloto-novo.php" method="POST">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Cadastro de Piloto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body"> 
          <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-sm-10 col-sm-8">

              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label for="inputNomeAerop">Nome:</label>
                  <input type="text" class="form-control" id="inputNomepilot" placeholder="Nome" name="nome">
                </div>
                <div class="form-group col-sm-6">
                  <label for="inputSobreNomePilot">Sobrenome:</label>
                  <input type="text" class="form-control" id="inputSobreNomePilot" placeholder="Sobrenome" name="sobrenome">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-12">
                  <label for="inputEmailPilot">email:</label>
                  <input type="text" class="form-control" id="inputEmailPilot" placeholder="exemplo@eolo.com" name="email">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label for="inputSenhaPilot">Senha:</label>
                  <input type="text" class="form-control" id="inputSenhaPilot" name="senha">
                </div>
                <div class="form-group col-sm-6">
                  <label for="inputSenhaPilot1">Confirmar Senha:</label>
                  <input type="text" class="form-control" id="inputSenhaPilot1" name="confirsenha2">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label for="inputCPFPilot">CPF:</label>
                  <input type="text" class="form-control" id="inputCPFPilot" placeholder="xxx.xxx.xxx-xx" name="cpf">
                </div>
                <div class="form-group col-sm-6">
                  <label for="inputEmpresaPiloto">Empresa vinculada:</label>
                  <select class="form-control" name="empvinculada">
                    <?php 
                        $consul = $MySQLi->query("SELECT * FROM TB_EMPRESAS");
                        while ($resultad = $consul->fetch_assoc()){
                        echo'<option value="'.$resultad['emp_codigo'].'">'.$resultad['emp_nome'].'</option>';
                    }?>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-12">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">Não sou um robô
                    </label>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-success">Enviar</button>
        </div>

      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="cadastraraeroporto" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <form action="aeroporto-novo.php" method="POST">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Cadastro de Aeroporto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body"> 
          <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-sm-10 col-sm-8">

              <div class="form-row">
                <div class="form-group col-sm-12">
                  <label for="inputNomeAeroporto">Nome:</label>
                  <input type="text" class="form-control" id="inputNomeAeroporto" placeholder="Nome" name="nome">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label for="inputLatitudeAeroporto">Latitude:</label>
                  <input type="text" class="form-control" id="inputLatitudeAeroporto" placeholder="Latitude" name="latitude">
                </div>
                <div class="form-group col-sm-6">
                  <label for="inputLongitudeAeroporto">Longitude:</label>
                  <input type="text" class="form-control" id="inputLongitudeAeroporto" placeholder="Longitude" name="longitude">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label for="inputCidadeAeroporto">Cidade:</label>
                  <input type="text" class="form-control" id="inputCidadeAeroporto" placeholder="Cidade" name="cidade">
                </div>
                <div class="form-group col-sm-6">
                  <label for="inputEstadoAeroporto">Estado:</label>
                  <input type="text" class="form-control" id="inputEstadoAeroporto" placeholder="Estado" name="estado">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-12">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">Não sou um robô
                    </label>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          <button type="submit" class="btn btn-success">Confirmar</button>
        </div>

      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="cadastrarvoo" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    <div class="modal-content">
      <form method="POST" action="voo-novo.php">

        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Cadastro de Voos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body"> 
          <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-sm-10 col-sm-8">

              <div class="form-row">
                <div class="form-group col-sm-6">
                  <label for="inputPistaVoo">Pista de decolagem:</label>
                  <input type="text" class="form-control" id="inputPistaVoo" placeholder="Nome" name="pisdec">
                </div>
                <div class="form-group col-sm-3">
                  <label for="inputPesoVoo">Peso:</label>
                  <input type="text" class="form-control" id="inputPesoVoo" placeholder="Kg" name="peso">
                </div>
                <div class="form-group col-sm-3">
                  <label for="inputQntPassaVoo">Passageiros:</label>
                  <input type="text" class="form-control" id="inputQntPassaVoo" placeholder="Quant." name="passageirosqnt">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-4">
                  <label for="inputAeronaveVoo">Aeronave:</label>
                  <select class="form-control" name="aeronaves">
                    <?php 
                        $consul8 = $MySQLi->query("SELECT * FROM TB_AERONAVES");
                        while ($resultad = $consul8->fetch_assoc()){
                        echo'<option value="'.$resultad['aen_codigo'].'">'.$resultad['aen_nome'].'</option>';
                    }?>
                  </select>
                </div>
                <div class="form-group col-sm-4">
                  <label for="inputFabricanteVoo">Fabricante:</label>
                  <select class="form-control" name="fabricante">
                    <?php 
                        $consult7 = $MySQLi->query("SELECT * FROM TB_FABRICANTES");
                        while ($resultado1 = $consult7->fetch_assoc()){
                        echo'<option value="'.$resultado1['fab_codigo'].'">'.$resultado1['fab_nome'].'</option>';
                    }?>
                  </select>
                </div>
                <div class="form-group col-sm-4">
                  <label for="inputEstadoVoo">Estado de Saída (físico):</label>
                  <input type="text" class="form-control" id="inputEstSaida" placeholder="Estado de saída" name="estsaida">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-4">
                  <label for="inputAeroSaidaVoo">Aeroporto de saída:</label>
                  <select class="form-control" name="aersaida">
                    <?php 
                        $consul = $MySQLi->query("SELECT * FROM TB_AEROPORTOS");
                        while ($resultado1 = $consul->fetch_assoc()){
                        echo'<option value="'.$resultado1['aer_codigo'].'">'.$resultado1['aer_nome'].'</option>';
                    }?>
                  </select>
                </div>
                <div class="form-group col-sm-4">
                  <label for="inputAeroChegadaVoo">Aeroporto de chegada:</label>
                  <select class="form-control" name="aerchegada">
                    <?php 
                        $consu = $MySQLi->query("SELECT * FROM TB_AEROPORTOS");
                        while ($resultado1 = $consu->fetch_assoc()){
                        echo'<option value="'.$resultado1['aer_codigo'].'">'.$resultado1['aer_nome'].'</option>';
                    }?>
                  </select>
                </div>
                <div class="form-group col-sm-2">
                  <label for="inputDistanciaVoo">Distância:</label>
                  <input type="text" class="form-control" id="inputDistanciaVoo" placeholder="Km" name="distancia">
                </div>
                <div class="form-group col-sm-2">
                  <label for="inputComercialVoo">Nº:</label>
                  <input type="text" class="form-control" id="inputComercialVoo" placeholder="Comercial" name="numerocomercial">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-4">
                  <label for="inputEmpresaVoo">Empresa:</label>
                  <select class="form-control" name="empresa">
                    <?php 
                        $consut = $MySQLi->query("SELECT * FROM TB_EMPRESAS");
                        while ($resultad = $consut->fetch_assoc()){
                        echo'<option value="'.$resultad['emp_codigo'].'">'.$resultad['emp_nome'].'</option>';
                    }?>
                  </select>
                </div>
                <div class="form-group col-8">
                  <label for="inputPilotoVoo">Piloto:</label>
                  <select class="form-control" name="piloto">
                    <?php 
                        $consut = $MySQLi->query("SELECT * FROM TB_PILOTOS");
                        while ($resultad = $consut->fetch_assoc()){
                        echo'<option value="'.$resultad['pil_codigo'].'">'.$resultad['pil_nome'].'</option>';
                    }?>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-4">
                  <label for="inputAutorizadaVoo"> Data Autorizada:</label>
                  <input type="date" class="form-control" id="inputAutorizadaVoo" name="dtautorizada">
                </div>
                <div class="form-group col-sm-4">
                  <label for="inputSaidaVoo">Data de Saída:</label>
                  <input type="date" class="form-control" id="inputSaidaVoo" name="dtsaida">
                </div>
                <div class="form-group col-sm-4">
                  <label for="inputChegadaVoo">Data de Chegada:</label>
                  <input type="date" class="form-control" id="inputChegadaVoo" name="dtchegada">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-sm-12">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="checkbox">Não sou um robô
                    </label>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-success">Cadastrar voo</button>
        </div>
      </form>
    </div>
  </div>
</div>
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="assets/libs/js/dashboard-ecommerce.js"></script>
</body>
 
</html>