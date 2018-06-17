<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- TODO: Descargarlo en la carpeta de componentes -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
    crossorigin="anonymous">
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
              <a href="vehicle-search.php" class="sidebar-nav-link">Búsqueda avanzada</a>
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
            <li class="breadcrumb-item active" aria-current="page">Catálogo de vehículos</li>
          </ol>
        </nav>

        <!-- All application's content goes here -->
        <div id="container" class="container-fluid">
          <h6>Filtro</h6>
          <select class="form-control" id="selFiltro">
            <option value="../../img/YARIS-HB_BLANCO.png" selected>Deportivo</option>
            <option value="../../img/YARIS-HB_AZUL.png">Muzle</option>
            <option value="../../img/YARIS-HB_GRIS.png">Camioneta</option>
          </select>
          <br>
          <div class="container-fluid">
            <div class="table-responsive">
              <table class="table" id="stockTable">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="text-center">#</th>
                    <th scope="col" class="text-center">Imagen</th>
                    <th scope="col" class="text-center">Modelo</th>
                    <th scope="col" class="text-center">Versión</th>
                    <th scope="col" class="text-center">Precio</th>
                    <th scope="col" class="text-center">Colores</th>
                    <th scope="col" class="text-center">Inventario</th>
                    <th scope="col" class="text-center">Cantidad</th>
                    <th scope="col" class="text-center">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="clickable-row">
                    <th scope="row" class="text-center">1</th>
                    <td class="text-center">
                      <img id="img1" src="../../img/YARIS-HB_BLANCO.png" class="img-fluid" width="100" height="100">
                    </td>
                    <td class="text-center" id="mod1">Yaris HB</td>
                    <td class="text-center" id="ver1">Core CVT</td>
                    <td class="text-center" id="pri1">$229,900.00</td>
                    <td class="text-center">
                      <select class="form-control" id="sel1" onclick="changeImage('img1', 'sel1')">
                        <option value="../../img/YARIS-HB_BLANCO.png" selected>Blanco</option>
                        <option value="../../img/YARIS-HB_AZUL.png">Azul</option>
                        <option value="../../img/YARIS-HB_GRIS.png">Gris</option>
                        <option value="../../img/YARIS-HB_NARANJA.png">Naranja</option>
                        <option value="../../img/YARIS-HB_NEGRO.png">Negro</option>
                        <option value="../../img/YARIS-HB_PLATA.png">Plata</option>
                        <option value="../../img/YARIS-HB_ROJO.png">Rojo</option>
                        <option value="../../img/YARIS-HB_VERDE.png">Verde</option>
                      </select>
                    </td>
                    <td style="color:green" class="text-center">Disponible</td>
                    <td class="text-center" id="can1">20</td>
                    <td class="text-center">
                      <div class="form-group">
                        <button class="btn btn-success" style="font-size:20px" title="Vender" data-toggle="modal" data-target="#ModalVender" onclick="setModalInformation('mod1', 'img1', 'ver1', 'sel1', 'pri1', 'can1')">
                          <i class="material-icons">add_shopping_cart</i>
                        </button>
                        <button class="btn btn-info" style="font-size:20px" title="Apartar" data-toggle="modal" data-target="#ModalApartar">
                          <i class="material-icons">book</i>
                        </button>
                        <button class="btn btn-danger" style="font-size:20px" title="Solicitar" data-toggle="modal" data-target="#ModalSolicitar"
                          disabled>
                          <i class="material-icons">compare_arrows</i>
                        </button>
                      </div>
                    </td>
                  </tr>

                  <tr class="clickable-row">
                    <th scope="row" class="text-center">2</th>
                    <td class="text-center">
                      <img id="img2" src="../../img/COROLLA_BLANCO.png" class="img-fluid" width="100" height="100">
                    </td>
                    <td class="text-center" id="mod2">Corolla</td>
                    <td class="text-center" id="ver2">Base MT</td>
                    <td class="text-center" id="pri2">$288,400.00</td>
                    <td class="text-center">
                      <select class="form-control" id="sel2" onclick="changeImage('img2', 'sel2')">
                        <option value="../../img/COROLLA_BLANCO.png" selected>Blanco</option>
                        <option value="../../img/COROLLA_BRONCE.png">Bronce</option>
                        <option value="../../img/COROLLA_NEGRO.png">Negro</option>
                        <option value="../../img/COROLLA_PLATA.png">Plata</option>
                        <option value="../../img/COROLLA_ROJO.png">Rojo</option>
                      </select>
                    </td>
                    <td style="color:green" class="text-center">Disponible</td>
                    <td class="text-center" id="can2">10</td>
                    <td class="text-center">
                      <div class="form-group">
                        <button class="btn btn-success" style="font-size:20px" title="Vender" data-toggle="modal" data-target="#ModalVender" onclick="setModalInformation('mod2', 'img2', 'ver2', 'sel2', 'pri2', 'can2')">
                          <i class="material-icons">add_shopping_cart</i>
                        </button>
                        <button class="btn btn-info" style="font-size:20px" title="Apartar" data-toggle="modal" data-target="#ModalApartar">
                          <i class="material-icons">book</i>
                        </button>
                        <button class="btn btn-danger" style="font-size:20px" title="Solicitar" data-toggle="modal" data-target="#ModalSolicitar"
                          disabled>
                          <i class="material-icons">compare_arrows</i>
                        </button>
                      </div>
                    </td>
                  </tr>

                  <tr class="clickable-row">
                    <th scope="row" class="text-center">3</th>
                    <td class="text-center">
                      <img id="img3" src="../../img/HIGHLANDER_BLANCO-PERLADO.png" class="img-fluid" width="100" height="100">
                    </td>
                    <td class="text-center" id="mod3">Highlander</td>
                    <td class="text-center" id="ver3">LE</td>
                    <td class="text-center" id="pri3">$565,000.00</td>
                    <td class="text-center">
                      <select class="form-control" id="sel3" onclick="changeImage('img3', 'sel3')">
                        <option value="../../img/HIGHLANDER_BLANCO-PERLADO.png" selected>Blanco perla</option>
                        <option value="../../img/HIGHLANDER_BRONCE.png">Bronce</option>
                        <option value="../../img/HIGHLANDER_JADE.png">Jade</option>
                        <option value="../../img/HIGHLANDER_NEGRO.png">Negro</option>
                        <option value="../../img/HIGHLANDER_PLATA.png">Plata</option>
                        <option value="../../img/HIGHLANDER_ROJO.png">Rojo</option>
                      </select>
                    </td>
                    <td style="color:green" class="text-center">Disponible</td>
                    <td class="text-center" id="can3">5</td>
                    <td class="text-center">
                      <div class="form-group">
                        <button class="btn btn-success" style="font-size:20px" title="Vender" data-toggle="modal" data-target="#ModalVender" onclick="setModalInformation('mod3', 'img3', 'ver3', 'sel3', 'pri3', 'can3')">
                          <i class="material-icons">add_shopping_cart</i>
                        </button>
                        <button class="btn btn-info" style="font-size:20px" title="Apartar" data-toggle="modal" data-target="#ModalApartar">
                          <i class="material-icons">book</i>
                        </button>
                        <button class="btn btn-danger" style="font-size:20px" title="Solicitar" data-toggle="modal" data-target="#ModalSolicitar"
                          disabled>
                          <i class="material-icons">compare_arrows</i>
                        </button>
                      </div>
                    </td>
                  </tr>

                  <tr class="clickable-row">
                    <th scope="row" class="text-center">4</th>
                    <td class="text-center">
                      <img id="img4" src="../../img/RAV4_BLANCO.png" class="img-fluid" width="100" height="100">
                    </td>
                    <td class="text-center" id="mod4">RAV4</td>
                    <td class="text-center" id="ver4">LE</td>
                    <td class="text-center" id="pri4">$385,000.00</td>
                    <td class="text-center">
                      <select class="form-control" id="sel4" onclick="changeImage('img4', 'sel4')">
                        <option value="../../img/RAV4_BLANCO.png" selected>Blanco</option>
                        <option value="../../img/RAV4_BLANCO-PERLADO.png">Blanco perla</option>
                        <option value="../../img/RAV4_GRIS-OSCURO.png">Gris oscuro</option>
                        <option value="../../img/RAV4_MORADO.png">Morado</option>
                        <option value="../../img/RAV4_NEGRO.png">Negro</option>
                        <option value="../../img/RAV4_PLATA.png">Plata</option>
                        <option value="../../img/RAV4_ROJO.png">Rojo</option>
                      </select>
                    </td>
                    <td style="color: red" class="text-center">No disponible</td>
                    <td class="text-center" id="can4">0</td>
                    <td class="text-center">
                      <div class="form-group">
                        <button class="btn btn-success" style="font-size:20px" title="Vender" data-toggle="modal" data-target="#ModalVender" onclick="setModalInformation('mod4', 'img4', 'ver4', 'sel4', 'pri4', 'can4')"
                          disabled>
                          <i class="material-icons">add_shopping_cart</i>
                        </button>
                        <button class="btn btn-info" style="font-size:20px" title="Apartar" data-toggle="modal" data-target="#ModalApartar" disabled>
                          <i class="material-icons">book</i>
                        </button>
                        <button class="btn btn-danger" style="font-size:20px" title="Solicitar" data-toggle="modal" data-target="#ModalSolicitar"
                          onclick="setModalInformationForRequests('mod4', 'img4', 'ver4', 'sel4', 'pri4', 'can4')">
                          <i class="material-icons">compare_arrows</i>
                        </button>
                      </div>
                    </td>
                  </tr>

                  <tr class="clickable-row">
                    <th scope="row" class="text-center">5</th>
                    <td class="text-center">
                      <img id="img5" src="../../img/TACOMA_BLANCO.png" class="img-fluid" width="100" height="100">
                    </td>
                    <td class="text-center" id="mod5">Tacoma</td>
                    <td class="text-center" id="ver5">Sport 4x2</td>
                    <td class="text-center" id="pri5">$596,500.00</td>
                    <td class="text-center">
                      <select class="form-control" id="sel5" onclick="changeImage('img5', 'sel5')">
                        <option value="../../img/TACOMA_BLANCO.png" selected>Blanco</option>
                        <option value="../../img/TACOMA_AZUL.png">Azul</option>
                        <option value="../../img/TACOMA_GRIS.png">Gris</option>
                        <option value="../../img/TACOMA_NARANJA.png">Naranja</option>
                        <option value="../../img/TACOMA_NEGRO.png">Negro</option>
                        <option value="../../img/TACOMA_PLATA.png">Plata</option>
                        <option value="../../img/TACOMA_ROJO.png">Rojo</option>
                      </select>
                    </td>
                    <td style="color:green" class="text-center">Disponible</td>
                    <td class="text-center" id="can5">15</td>
                    <td class="text-center">
                      <div class="form-group">
                        <button class="btn btn-success" style="font-size:20px" title="Vender" data-toggle="modal" data-target="#ModalVender" onclick="setModalInformation('mod5', 'img5', 'ver5', 'sel5', 'pri5', 'can5')">
                          <i class="material-icons">add_shopping_cart</i>
                        </button>
                        <button class="btn btn-info" style="font-size:20px" title="Apartar" data-toggle="modal" data-target="#ModalApartar">
                          <i class="material-icons">book</i>
                        </button>
                        <button class="btn btn-danger" style="font-size:20px" title="Solicitar" data-toggle="modal" data-target="#ModalSolicitar"
                          disabled>
                          <i class="material-icons">compare_arrows</i>
                        </button>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>

          <!-- Modal Vender -->
          <div class="modal fade" id="ModalVender" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Registrar venta de vehículo</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <h3 id="ModalVenderModel"></h3>
                  <img id="ModalVenderImage" class="img-fluid" style="float: left;">
                  <h5>Información</h5>
                  <hr>
                  <div class="col">
                    <div class="form-group">
                      <label>Versión:</label>
                      <input class="form-control" id="ModalVenderVersion" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Color:</label>
                      <input class="form-control" id="ModalVenderColor" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Precio:</label>
                      <input class="form-control" id="ModalVenderPrice" readonly>
                    </div>
                  </div>

                  <h5>Cliente</h5>
                  <hr>
                  <div class="col">
                    <div class="form-group">
                      <label>*RFC:</label>
                      <input id="ModalVenderRFC" class="form-control">
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Nombre:</label>
                      <input id="ModalVenderName" class="form-control" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Correo electrónico:</label>
                      <input id="ModalVenderEmail" class="form-control" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Teléfono:</label>
                      <input id="ModalVenderPhone" class="form-control" readonly>
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                  <button id="btnModalVender" type="button" class="btn btn-success" data-dismiss="modal">Registrar</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Apartar -->
          <div class="modal fade" id="ModalApartar" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Apartar vehículo</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <h3 id="ModalVenderModel"></h3>
                  <img id="ModalVenderImage" class="img-fluid" style="float: left;">
                  <h5>Información</h5>
                  <hr>
                  <div class="col">
                    <div class="form-group">
                      <label>Versión:</label>
                      <input class="form-control" id="ModalVenderVersion" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Color:</label>
                      <input class="form-control" id="ModalVenderColor" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Precio:</label>
                      <input class="form-control" id="ModalVenderPrice" readonly>
                    </div>
                  </div>

                  <h5>Cliente</h5>
                  <hr>
                  <div class="col">
                    <div class="form-group">
                      <label>*RFC:</label>
                      <input id="ModalVenderRFC" class="form-control">
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Nombre:</label>
                      <input id="ModalVenderName" class="form-control" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Correo electrónico:</label>
                      <input id="ModalVenderEmail" class="form-control" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Teléfono:</label>
                      <input id="ModalVenderPhone" class="form-control" readonly>
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                  <button id="btnModalApartar" type="button" class="btn btn-success" data-dismiss="modal">Registrar</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal Solicitar -->
          <div class="modal fade" id="ModalSolicitar" role="dialog">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Solicitar vehículo a agencia externa</h4>
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                  <h3 id="ModalSolicitarModel"></h3>
                  <img id="ModalSolicitarImage" class="img-fluid" style="float: left;">
                  <h5>Información</h5>
                  <hr>
                  <div class="col">
                    <div class="form-group">
                      <label>Versión:</label>
                      <input class="form-control" id="ModalSolicitarVersion" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Color:</label>
                      <input class="form-control" id="ModalSolicitarColor" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Precio:</label>
                      <input class="form-control" id="ModalSolicitarPrice" readonly>
                    </div>
                  </div>

                  <h5>Agencias</h5>
                  <hr>
                  <div class="col">
                    <div class="form-group">
                      <label>*Agencias:</label>
                      <select class="form-control" id="ModalSolicitarAgencies" onclick="getAgencyInformation('ModalSolicitarAgencies')">
                        <option value="age0" selected>--</option>
                        <option value="age1">Oz Toyota Colima</option>
                        <option value="age2">Dalton Toyota López Mateos Guadalajara</option>
                      </select>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Domicilio:</label>
                      <input type="text" class="form-control" id="ModalSolicitarAddress" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Ciudad:</label>
                      <input type="text" class="form-control" id="ModalSolicitarTown" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Estado:</label>
                      <input type="text" class="form-control" id="ModalSolicitarState" readonly>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <label>Teléfono:</label>
                      <input type="text" class="form-control" id="ModalSolicitarPhone" readonly>
                    </div>
                  </div>

                </div>
                <div class="modal-footer">
                  <button id="btnModalSolicitar" type="button" class="btn btn-success" data-dismiss="modal" disabled>Solicitar</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>

  <!-- Archivos de JavaScript locales -->
  <script src="../../js/admin4b.min.js"></script>
  <script src="../../js/admin4b.docs.js"></script>

  <!-- Delete this -->
  <script type="text/javascript">
    var lastQuantity = null;
    var foundFlag = false;
    var selectedAgencyFlag = false;

    function changeImage(id, select) {
      $("#" + id).attr("src", $("#" + select + " option:selected").val());
    }

    function getAgencyInformation(select) {
      var id = $("#" + select + " option:selected").val();

      if (id == "age1") {
        $("#ModalSolicitarAddress").val("Calle Lic. Carlos de La Madrid Béja  No. 909, El Tecolote");
        $("#ModalSolicitarTown").val("Colima");
        $("#ModalSolicitarState").val("Colima");
        $("#ModalSolicitarPhone").val("01 312 312 3139");
        $("#btnModalSolicitar").attr("disabled", false);
      } else if (id == "age2") {
        $("#ModalSolicitarAddress").val("Av. Adolfo López Mateos Sur No. 3780, La Calma");
        $("#ModalSolicitarTown").val("Guadalajara");
        $("#ModalSolicitarState").val("Jalisco");
        $("#ModalSolicitarPhone").val("01 33 3884 6060");
        $("#btnModalSolicitar").attr("disabled", false);
      } else if (id == "age0") {
        $("#ModalSolicitarAddress").val(null);
        $("#ModalSolicitarTown").val(null);
        $("#ModalSolicitarState").val(null);
        $("#ModalSolicitarPhone").val(null);
        $("#btnModalSolicitar").attr("disabled", true);
      }
    }

    function setModalInformation(model, image, version, select, price, quantity) {
      $("#ModalVenderModel").text($("#" + model).text());
      $("#ModalVenderImage").attr("src", $("#" + image).attr("src"));
      $("#ModalVenderVersion").val($("#" + version).text());
      $("#ModalVenderColor").val($("#" + select + ' option:selected').text());
      $("#ModalVenderPrice").val($("#" + price).text());
      lastQuantity = $("#" + quantity);
    }

    function setModalInformationForRequests(model, image, version, select, price, quantity) {
      $("#ModalSolicitarModel").text($("#" + model).text());
      $("#ModalSolicitarImage").attr("src", $("#" + image).attr("src"));
      $("#ModalSolicitarVersion").val($("#" + version).text());
      $("#ModalSolicitarColor").val($("#" + select + ' option:selected').text());
      $("#ModalSolicitarPrice").val($("#" + price).text());
    }

    $("#ModalVenderRFC").on('keydown', function (e) {
      if (e.which == 13) {
        if ($("#ModalVenderRFC").val() == "FEFJ760519U91") {
          $("#ModalVenderName").val("Jesús Carlos Fernández Flores");
          $("#ModalVenderEmail").val("jfern_76@gmail.com");
          $("#ModalVenderPhone").val("3141220970");
          foundFlag = true;
        }
      }
    });

    $("#btnModalVender").click(function () {
      if (foundFlag == true) {
        lastQuantity.text(parseInt(lastQuantity.text()) - 1);
        $("#container").prepend("<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>Éxito:</strong> La venta se registró exitosamente.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
        foundFlag = false;
      }
    });

    $("#btnModalSolicitar").click(function () {
      $("#container").prepend("<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>Éxito:</strong> La solicitud fue enviada y se encuentra en espera de aprobación.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
    });
  </script>
</body>

</html>