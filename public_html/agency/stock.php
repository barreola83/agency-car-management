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
              Dámaso
              <small>Gerente de Agencias</small>
            </p>
          </div>

          <div id="sidebar-nav" class="sidebar-nav" data-children=".sidebar-nav-group">

            <a href="#" class="sidebar-nav-link">
              <i class="icon-home"></i> Inicio
            </a>

            <div class="sidebar-nav-group">
                <a href="#vehicles-stock" class="sidebar-nav-link collapsed" data-toggle="collapse" data-parent="#sidebar-nav">
                    <i class="icon-people"></i> Stock de vehículos
                </a>
            </div>

            <div class="sidebar-nav-group">
                <a href="#vehicles-request" class="sidebar-nav-link collapsed" data-toggle="collapse" data-parent="#sidebar-nav">
                    <i class="icon-speedometer"></i> Solicitud de Vehículos
                </a>
            </div>

            <div class="sidebar-nav-group">
                <a href="#reports" class="sidebar-nav-link collapsed" data-toggle="collapse" data-parent="#sidebar-nav">
                    <i class="icon-wallet"></i> Reportes
                </a>
            </div>

          </div>
          
          <div class="sidebar-footer">
            <a href="https://github.com/marxjmoura/admin4b" data-toggle="tooltip" title="GitHub">
              <i class="fa fa-github"></i>
            </a>
            <a href="./pages/sample-pages/settings.html" data-toggle="tooltip" title="Settings">
              <i class="fa fa-cog"></i>
            </a>
            <a href="./pages/sample-pages/signin.html" data-toggle="tooltip" title="Logout">
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

            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="badge badge-pill badge-primary">3</span>
                  <i class="fa fa-bell-o"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="#" class="dropdown-item">
                    <small class="text-secondary">Lorem ipsum (today)</small><br>
                    <div>Lorem ipsum dolor sit amet...</div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <small class="text-secondary">Lorem ipsum (yesterday)</small><br>
                    <div>Lorem ipsum dolor sit amet...</div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">
                    <small class="text-secondary">Lorem ipsum (12/25/2017)</small><br>
                    <div>Lorem ipsum dolor sit amet...</div>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item text-primary">
                    See all notifications
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of header -->

          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">¡Bienvenido Dámaso!</li>
            </ol>
          </nav>

          <!-- All applications content goes here -->
         <div class="container-fluid">
            <h2 style="text-align:center">Stock de Vehículos</h2>

            <div class="row">
              <div class="col col-md-12 col-lg-12">
                <div class="form-group">
                  <label>
                    ID del vehículo <small class="text-secondary">(requerido)</small>
                  </label>
                  <input class="form-control" type="text">
                </div>
              </div>
              <div class="col col-md-12 col-lg-12">
                <div class="form-group">
                  <label>Número disponible</label>
                  <input class="form-control" disabled="">
                </div>
              </div>
              <div class="col col-md-9 col-lg-9"></div>
              <div class="col col-md-3 col-lg-3">
                <div class="form-group">
                  <button class="btn btn-block btn-success">Consultar</button>
                </div>
              </div>
            </div>
          </div>
          
          <!-- End of application content -->
          
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
