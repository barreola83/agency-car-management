<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- TODO: Descargarlo en la carpeta de componentes -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">

    <!-- Archivos locales CSS -->
    <link href="../../css/admin4b.min.css" rel="stylesheet">
    <link href="../../css/admin4b-highlight.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
  <script src="js/main.js" type="text/javascript"></script>
    <title>Toyota Admin</title>
  </head>

  <body>
    <div class="app">
      <div class="app-body">
        <div class="app-sidebar sidebar-dark sidebar-slide-left">

          <!-- Start of navigation bar -->
        <div class="text-right">
            <button type="button" class="btn btn-sidebar" data-dismiss="sidebar">
              <span class="x"></span>
            </button>
          </div>
  
          <div class="sidebar-header">
            <img src="../../img/user-photo.png" class="user-photo">
            <p class="username">
              Carlos Herrera
              <small>Vendedor</small>
            </p>
          </div>
  
          <div id="sidebar-nav" class="sidebar-nav" data-children=".sidebar-nav-group">
  
            <a href="index.php" class="sidebar-nav-link">
              <i class="icon-home"></i> Inicio
            </a>
  
            <div class="sidebar-nav-group">
                <a href="#prospects-clients" class="sidebar-nav-link collapsed" data-toggle="collapse" data-parent="#sidebar-nav">
                    <i class="icon-people"></i> Clientes y prospectos
                </a>
                <div id="prospects-clients" class="sidebar-nav-group collapse">
                    <a href="prospect-new.php" class="sidebar-nav-link">Registrar</a>
                    <a href="prospect-search.php" class="sidebar-nav-link">Consultar</a>
                </div>
            </div>
  
            <div class="sidebar-nav-group">
                <a href="#vehicles" class="sidebar-nav-link collapsed" data-toggle="collapse" data-parent="#sidebar-nav">
                    <i class="icon-speedometer"></i> Vehículos
                </a>
                <div id="vehicles" class="sidebar-nav-group collapse">
                    <a href="vehicles.php" class="sidebar-nav-link">Catálogo</a>
                </div>
            </div>
  
            <div class="sidebar-nav-group">
                <a href="#agenda" class="sidebar-nav-link collapsed" data-toggle="collapse" data-parent="#sidebar-nav">
                    <i class="icon-calendar"></i> Agenda
                </a>
                <div id="agenda" class="sidebar-nav-group collapse">
                    <a href="appointment-new.php" class="sidebar-nav-link">Registrar cita</a>
                    <a href="appointment-update.php" class="sidebar-nav-link">Consultar cita</a>
                </div>
            </div>
  
          </div>
          
          <div class="sidebar-footer">
            <a href="../general/signin.html" data-toggle="tooltip" title="Logout">
              <i class="fa fa-power-off"></i>
            </a>
          </div>
  
        </div>
        <!-- End of navigation bar -->

        <!-- App Content -->
        <div class="app-content">

          <!-- Header -->
          <nav class="navbar navbar-expand navbar-light bg-white">
            <button type="button" class="btn btn-sidebar" data-toggle="sidebar">
              <i class="fa fa-bars"></i>
            </button>

            <div class="navbar-brand">
              <a href="index.html">
                <img src="../../img/logo_toyota.png">
              </a>
            </div>
          </nav>
          <!-- End of header -->

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">¡Bienvenido Carlos Herrera!</li>
            </ol>
          </nav>

          <!-- All application's content goes here -->
          <div class="container-fluid">
            <h2 style="text-align:center">Cliente/Prospecto</h2>

            <input type="search" id="IdSearch" class="form-control" placeholder="Buscar">
            <br>
            <div id="DivTabla">
            <table class="table" id="prospectTable">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Tipo</th>
                    <th scope="col" class="text-center">Nombre</th>
                    <th scope="col" class="text-center">Correo</th>
                    <th scope="col" class="text-center">Telefono</th>
                    <th scope="col" class="text-center">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  require "funciones.php";
                  $conn=ConectarBD();
                  $result=$conn->query("select * from prospects_clients");
                  if($conn->error){
                    die("Error en la consulta".$conn->error);
                  }
                  while($row=$result->fetch_assoc()){
                  ?>
                  <tr>
                    <td class="text-center"><?php echo $row["id"]?></td>
                    <td class="text-center"><?php echo $row["type"]?></td>
                    <td class="text-center" hidden><?php echo $row["RFC"]?></td>
										<td class="text-center">
                      <label><?php echo $row["name"]?></label> <label><?php echo $row["first_last_name"]?></label> <label><?php echo $row["second_last_name"]?></label>
                    </td>
                    <td class="text-center" hidden><?php echo $row["home_address"]?></td>
										<td class="text-center"><?php echo $row["email"]?></td>
                    <td class="text-center"><?php echo $row["phone"]?></td>
                    <td class="text-center">
                      <div class="form-group">
                        <button class="btn btn-success" style="font-size:20px" title="Modificar" data-toggle="modal" data-target="#ModalModificar" onclick="loadEdit(this,<?php echo $row["id"] ?>)">
                          <i class="material-icons">update</i>
                        </button>
                        <button class="btn btn-danger" style="font-size:20px" title="Eliminar" data-toggle="modal" data-target="#ModalEliminar" onclick="loadDelete(this,<?php echo $row["id"] ?>)">
                          <i class="material-icons">delete_forever</i>
                        </button>
                      </div>
                    </td>
                  </tr>
                  <?php }
                  ?>
                </tbody>
              </table>
            </div>

            <!-- Modal Modificar -->
          <div class="modal fade" id="ModalModificar" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Modificar Cliente/Prospecto</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <h3 id="ModalVenderModel"></h3>
                  <img id="ModalVenderImage" class="img-fluid" style="float: left;">
                  <h5>Información</h5>
                  <hr>

                  <div class="col">
                    <div class="form-group">
                      <label>Tipo:</label>
                      <select class="form-control" name="type" id="ModalModificarTipo">
                        <option value="PROSPECT" selected>Prospecto</option>
                        <option value="CLIENT">Cliente</option>
                      </select>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>RFC:</label>
                      <input type="hidden" id="ModalModificarId">
                      <input class="form-control" id="ModalModificarRFC">
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Nombre:</label>
                      <input class="form-control" id="ModalModificarNombre">
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Apellido Paterno:</label>
                      <input class="form-control" id="ModalModificarAp">
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Apellido Materno:</label>
                      <input class="form-control" id="ModalModificarAm">
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Domicilio:</label>
                      <input class="form-control" id="ModalModificarDomicilio">
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Correo:</label>
                      <input class="form-control" id="ModalModificarCorreo">
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Teléfono:</label>
                      <input class="form-control" id="ModalModificarTel">
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                  <button id="btnModalModificar" type="button" class="btn btn-success">Modificar</button>
                  <button id="btnCancelar" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
              </div>
            </div>
          </div>
            
            <!-- Modal Eliminar -->
          <div class="modal fade" id="ModalEliminar" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Eliminar Cliente/Prospecto</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <h3 id="ModalVenderModel"></h3>
                  <img id="ModalVenderImage" class="img-fluid" style="float: left;">
                  <h5>Información</h5>
                  <hr>

                  <div class="col">
                    <div class="form-group">
                      <label>Tipo:</label>
                      <select class="form-control" name="type" id="ModalModificarTipo" readonly>
                        <option value="PROSPECT" selected>Prospecto</option>
                        <option value="CLIENT">Cliente</option>
                      </select>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>RFC:</label>
                      <input type="hidden" id="ModalEliminarId">
                      <input class="form-control" id="ModalEliminarRFC" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Nombre:</label>
                      <input class="form-control" id="ModalEliminarNombre" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Apellido Paterno:</label>
                      <input class="form-control" id="ModalEliminarAp" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Apellido Materno:</label>
                      <input class="form-control" id="ModalEliminarAm" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Domicilio:</label>
                      <input class="form-control" id="ModalEliminarDomicilio" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Correo:</label>
                      <input class="form-control" id="ModalEliminarCorreo" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Teléfono:</label>
                      <input class="form-control" id="ModalEliminarTel" readonly>
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                  <button id="btnModalEliminar" type="button" class="btn btn-danger" data-dismiss="modal">Eliminar</button>
                  <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                </div>
              </div>
            </div>
          </div>

          </div>
          <!-- End of application content -->
          
        </div>
      </div>
    </div>

    <!-- TODO: Descargarlo en la carpeta componentes y enlazarlos -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>

    <!-- Archivos de JavaScript locales -->
    <script src="../../js/admin4b.min.js"></script>
    <script src="../../js/admin4b.docs.js"></script>
  </body>
</html>