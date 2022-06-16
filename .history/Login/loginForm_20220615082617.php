<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../menu/style.css">
    <title>Login</title>
    <link rel="icon" href="../img/bg-img/logo.png">
</head>

<body>
    <header>
        <header class="header-area">
            <!-- Navbar -->
            <div class="academy-main-menu">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container">
                        <!-- Menu -->
                        <nav class="classy-navbar justify-content-between" id="academyNav">
                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>
                            <!-- Menu -->
                            <div class="classy-menu">
                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>
                                <!-- Nav Start -->
                                <div class="classynav">
                                    <div class="academy-logo">
                                        <a href="../index.php"><img src="../img/bg-img/logo.png" alt="" width="120"></a>
                                    </div>
                                    <ul>
                                        <li><a href="../index.php">Inicio</a></li>
                                        </li>
                                        <li><a href="../menu/about-us.php">Sobre Nosotros</a></li>
                                        <li><a href="../menu/contact.php">Contactanos</a></li>
                                    </ul>
                                </div>
                                <!-- Nav End -->
                            </div>
                            <!-- Calling Info -->
                            <div class="calling-info">
                                <div class="call-center">
                                    <a href="loginform.php"><i class="icon-house"></i> <span>INICIAR SESION</span></a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <br> </br>

        <div class="login-container">
            <div class="login-info-container">
                <div class="social-login">
                    <div class="login-element"></div>
                </div>

                <br> </br>

                <form action="validar.php" method="post" class="inputs-container">
                    <img src="../img/f.png">
                    <br></br>
                    <input class="input" type="text" placeholder="Usuario" name="Usuario" required>
                    <br></br>
                    <input class="input" type="password" placeholder="Contraseña" name="Contrasenia" required>
                    <br></br>
                    <input name="submit" class="btn" type="submit" value="Iniciar Sesion ">
                    <br></br>
                    <a class="small" href="../restablecerContra.php">¿Has olvidado tu contraseña?</a>
                </form>
            </div>


            <img class="image-container" src="../img/img1.png" alt="">

            <BR> </BR>
            <BR> </BR>
            <BR> </BR>
            <BR> </BR>
            <BR> </BR>
            <BR> </BR>
        </div>
               <!-- #####  Javascript Script ##### -->
                    <!-- jQuery-2.2.4 js -->
                    <script src="js/jquery/jquery-2.2.4.min.js"></script>
                    <!-- Popper js -->
                    <script src="js/bootstrap/popper.min.js"></script>
                    <!-- Bootstrap js -->
                    <script src="js/bootstrap/bootstrap.min.js"></script>
                    <!-- All Plugins js -->
                    <script src="js/plugins/plugins.js"></script>
                    <!-- Active js -->
                    <script src="js/active.js"></script>
</body>

</html>