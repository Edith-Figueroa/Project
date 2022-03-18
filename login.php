<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>COPAP</title>

  <!-- FUENTES-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- CSS-->
  <link href="css/estilo.css" rel="stylesheet">
  <link rel="icon" href="img/Moneda.png">

</head>

<body class="bg-gradient-primary">

  <div class="container">
    <!-- Fila exterior -->
    <div class="row justify-content-center">

      <div class="col-xl-8 col-lg-12 col-md-1">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Fila anidada dentro del cuerpo de la tarjeta -->
            <div class="p-5">
              <div class="text-center" style=" width: 60vw; margin-left : 7vw;">
                <div class=" col-sm-6 mb-3 mb-sm-0">
                  <h1 class="h4 text-gray-900 mb-4">¡Bienvenido!</h1>
                </div>
              </div>
              <form action="Login/validar.php" method="post" class="user" style=" width: 60vw; margin-left : 7vw;">
                <div class=" form-group">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="Usuario" placeholder="Nombre de usuario">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" name="Contrasenia" placeholder="Contraseña">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="custom-control custom-checkbox small">
                      <input type="checkbox" class="custom-control-input" id="customCheck">
                      <label class="custom-control-label" for="customCheck">Recuerdame</label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 mb-3 mb-sm-0">
                  <input name="submit" class="btn btn-primary btn-user btn-block" type="submit" value="Iniciar Sesion ">
                </div>
              </form>
              <hr>
              <div class="text-center" style=" width: 60vw; margin-left : 7vw;">
                <div class=" col-sm-6 mb-3 mb-sm-0">
                  <a class="small" href="contraOlvidada.php">¿Has olvidado tu contraseña?</a>
                </div>
              </div>

            </div>
          </div>
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