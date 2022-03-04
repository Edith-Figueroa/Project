<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Planilla de Pagos</title>

  <!-- FUENTES-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- CSS-->
  <link href="css/estilo.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Fila anidada dentro del cuerpo de la tarjeta -->
        <div class="">
          <div class="p-5">
            <div class="text-center">
              <h1 class="h4 text-gray-900 mb-4">Crear nuevo usuario</h1>
            </div>
            <form class="user">
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="nombreInput" placeholder="Nombre">
                </div>
                <div class="col-sm-6">
                  <input type="text" class="form-control form-control-user" id="apellidoInput" placeholder="Apellido">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="text" class="form-control form-control-user" id="nomUsuarioInput"
                    placeholder="Nombre de usuario">
                </div>
                <div class="col-sm-6">
                  <input type="email" class="form-control form-control-user" id="emailInput" placeholder="Correo">
                </div>
              </div>
              <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input type="password" class="form-control form-control-user" id="contraInput"
                    placeholder="Contraseña">
                </div>
                <div class="col-sm-6">
                  <input type="password" class="form-control form-control-user" id="contraRepeInput"
                    placeholder="Repetir contraseña">
                </div>
              </div>
              <a href="index.php" class="btn btn-primary btn-user btn-block">
                Registrar nuevo usuario
              </a>
            </form>
            <hr>
            <div class="text-center">
              <a class="small" href="contraOlvidada.php">¿Olvido su contraseña?</a>
            </div>
            <div class="text-center">
              <a class="small" href="login.php">¿Ya tienes un usuario? Inicia sesion</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  </div>

  <!-- JavaScript básico de Bootstrap-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Complemento principal de JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Scripts personalizados para todas las páginas-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>