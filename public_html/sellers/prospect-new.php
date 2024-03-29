<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- TODO: Descargarlo en la carpeta de componentes -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy"
    crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
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
            <li class="breadcrumb-item active" aria-current="page">Registrar nuevo prospecto/cliente</li>
          </ol>
        </nav>
        
        <!-- All application's content goes here -->
        <div id="container" class="container-fluid">

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>Tipo:</label>
                <select class="form-control" name="type" id="idTipo">
                  <option value="PROSPECT" selected>Prospecto</option>
                  <option value="CLIENT">Cliente</option>
                </select>
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label>*RFC:</label>
                <input id="idRFC" type="text" class="form-control" name="rfc" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>*Nombre:</label>
                <input id="idNombre" type="text" class="form-control" name="name" required>
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label>*Apellido paterno:</label>
                <input id="idAp" type="text" class="form-control" name="first_last_name" required>
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label>Apellido materno:</label>
                <input id="idAm" type="text" class="form-control" name="second_last_name">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>*Domicilio:</label>
                <input id="idDomicilio" type="text" class="form-control" name="home_address" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <label>*Correo electrónico:</label>
                <input id="idCorreo" type="text" class="form-control" name="email" required>
              </div>
            </div>

            <div class="col">
              <div class="form-group">
                <label>*Teléfono:</label>
                <input id="idTel" type="tel" class="form-control" name="phone" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col">
              <div class="form-group">
                <button type="button" class="btn btn-success" id="btnRegistrar">Registrar</button>
              </div>
            </div>
          </div>

        </div>
        <!-- End of application content -->

      </div>
    </div>
  </div>

  <!-- TODO: Descargarlo en la carpeta componentes y enlazarlos -->
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
    /*
      <div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Éxito:</strong> El registro se llevó a cabo de forma exitosa.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
    */
    $(document).ready(function() {
      $("#submit").click(function() {
        $("#container").prepend("<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>Éxito:</strong> El registro se llevó a cabo de forma exitosa.<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>");
      });
    });
  </script>
</body>

</html>