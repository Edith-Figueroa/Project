<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ciudades</title>

  <!-- FUENTES-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- CSS-->
  <link href="../css/estilo.css" rel="stylesheet">
  <link rel="icon" href="../img/Moneda.png">
  <!-- JS-->
  <script src="../js/jquery.min.js"></script>

</head>

<body id="page-top">

  <?php $Usuario = $_GET['idUsuario'];
  $Empresa = $_GET['Empresas_idEmpresas'];

  include '../SqlTools/database.php';
  $auxiliar = new database();
  $auxiliar->select('usuarios', 'Usuario', "idUsuario = '$Usuario'");
  $nombre = $auxiliar->sql;
  $name = mysqli_fetch_assoc($nombre); ?>

  <!-- Envoltura de pagina -->
  <div id="wrapper">

    <!-- barra lateral -->
    <?php include "../SqlTools/serviceMenu.php"; ?>
    <!-- Fin de la barra lateral -->


    <!-- Envoltorio de contenido -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main contenido -->
      <div id="content">

        <!-- Barra superior -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Alternar barra lateral (barra superior) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Búsqueda en la barra superior -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" title="Ingrese dato a buscar" placeholder=" Buscar..." aria-label="Search" aria-describedby="basic-addon2" name="filtro" id="filtro">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button" title="Buscar">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>
          <!--Estado-->
          <form class="d-none d-sm-inline-block  mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="formulario__grupo" id="grupo__direccion">
              <select class="custom-select form-control" name="estado_Ciudad" id="estado_Ciudad" title="Seleccione opcion para buscar por estado">
                <option value="1" selected>Activos</option>
                <option value="2">Inactivos</option>
              </select>
            </div>
          </form>

          <!-- Barra superior Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>

            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - Información del usuario -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $name['Usuario'] ?></span>
                <img class="img-profile rounded-circle" src="../img/undraw_profile.svg">
              </a>
              <!-- Desplegable - Información del usuario -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a> -->
                <a class="dropdown-item" href="../Login/cambioContra.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cambio de contraseña
                </a>
                <!-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Actividad
                                </a> -->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesión
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- Fin de la barra superior -->

        <!-- Contenido de la página de inicio -->
        <div class="container-fluid">

          <!-- Encabezado de página -->
          <h1 class="h3 mb-2 text-gray-800">Ciudades</h1>
          <div class="card shadow mb-4">

            <!-- Tablas-->
            <div class="table-body">
              <div class="table-responsive" id="dataTable">
                <table class="table table-bordered" id="TableInfo" width="100%" cellspacing="0">
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- Fin del contenido principal -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Bandersnatch 2022 </span>
          </div>
        </div>
      </footer>
      <!-- Fin del Footer -->

    </div>
    <!-- Envoltorio de fin de contenido -->

  </div>
  <!-- Envoltorio de fin de página -->

  <!--Desplácese al botón superior-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Cierre de sesión modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Seguro que deseas salir?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecciona "Cerrar sesión" a continuación si está listo para finalizar su sesión actual.
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="../Login/login.php">Cerrar Sesion</a>
        </div>
      </div>
    </div>
  </div>

  <!-- JavaScript básico de Bootstrap-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Complemento principal de JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Scripts personalizados para todas las páginas-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Complementos de nivel de página -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Scripts personalizados a nivel de página -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>
<script>
  $(buscar_datos());

  function buscar_datos(sql) {
    $.ajax({
        type: "POST",
        url: "filtroCiudades.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>",
        data: {
          sql: sql
        },
        dataType: "html",
      })
      .done(function(ans) {
        $("#TableInfo").html(ans);
      })
      .fail(function() {
        console.log("Fail")
      })
  }

  function buscar_estado(point) {
    $.ajax({
        type: "POST",
        url: "filtroCiudades.php?idUsuario=<?php echo $Usuario ?>&Empresas_idEmpresas=<?php echo $Empresa ?>&state=" + state + "",
        data: {
          point: point
        },
        dataType: "html"
      })
      .done(function(ans) {
        $("#TableInfo").html(ans);
      })
      .fail(function() {
        console.log("Fail")
      })
  }

  $("#filtro").on('keyup', function() {
    var value = $(this).val();

    if (value != "") {
      buscar_datos(value);
    } else {
      buscar_datos();
    }
  });

  $("#estado_Ciudad").on("change", function() {
    var value = $(this).val();
    buscar_estado(value);
  });

  var state = $("#estado_Ciudad").val();
</script>