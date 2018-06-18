<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- TODO: Descargarlo en la carpeta de componentes -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">

    <!-- Archivos locales CSS -->
    <link href="../../css/admin4b.min.css" rel="stylesheet">
    <link href="../../css/admin4b-highlight.min.css" rel="stylesheet">
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
            <h2 style="text-align:center">Cliente</h2>

            <div class="row">
              <div class="col col-md-12 col-lg-12">
                <div class="form-group">
                  <label>
                    Nombre <small class="text-secondary">(requerido)</small>
                  </label>
                  <input class="form-control" type="text" placeholder="Christian">
                </div>
              </div>
              <div class="col col-md-12 col-lg-12">
                <div class="form-group">
                  <label>
                    Apellido Paterno <small class="text-secondary">(requerido)</small>
                  </label>
                  <input class="form-control" type="text" placeholder="Cagide">
                </div>
              </div>
              <div class="col col-md-12 col-lg-12">
                <div class="form-group">
                  <label>
                    Apellido Materno <small class="text-secondary">(requerido)</small>
                  </label>
                  <input class="form-control" type="text" placeholder="X">
                </div>
              </div>
              <div class="col col-md-12 col-lg-12">
                <div class="form-group">
                  <label>
                    RFC <small class="text-secondary">(requerido)</small>
                  </label>
                  <input class="form-control" type="text" placeholder="SDASFR4534">
                </div>
              </div>
              <div class="col col-md-12 col-lg-12">
                <div class="form-group">
                  <label>
                    Direccion <small class="text-secondary">(requerido)</small>
                  </label>
                  <input class="form-control" type="text" placeholder="pasceis #55">
                </div>
              </div>
              <div class="col col-md-12 col-lg-12">
                <div class="form-group">
                  <label>
                    Correo <small class="text-secondary">(requerido)</small>
                  </label>
                  <input class="form-control" type="text">
                </div>
              </div>
              <div class="col col-md-12 col-lg-12">
                <div class="form-group">
                  <label>
                    Telefono <small class="text-secondary">(requerido)</small>
                  </label>
                  <input class="form-control" type="text">
                </div>
              </div>
              <div class="col col-md-9 col-lg-9"></div>
              <div class="col col-md-3 col-lg-3">
                <div class="form-group">
                  <button class="btn btn-block btn-success">Guardar Cambios</button>
                </div>
              </div>
            </div>
          </div>
          <!-- End of application content -->
          
        </div>
      </div>
    </div>

    <!-- TODO: Descargarlo en la carpeta componentes y enlazarlos -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>

    <!-- Archivos de JavaScript locales -->
    <script src="../../js/admin4b.min.js"></script>
    <script src="../../js/admin4b.docs.js"></script>
  </body>
</html>