<!DOCTYPE html>
<html lang="es">
<head>
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <!-- animate CSS -->
            <link rel="stylesheet" href="css/animate.css">
            <!-- owl carousel CSS -->
            <link rel="stylesheet" href="css/owl.carousel.min.css">
            <!-- font awesome CSS -->
            <link rel="stylesheet" href="css/all.css">
            <!-- flaticon CSS -->
            <link rel="stylesheet" href="css/flaticon.css">
            <link rel="stylesheet" href="css/themify-icons.css">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="css/slick.css">
        <!-- style CSS -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- Agregamos estilos adicionales para las tarjetas -->
  <style>

    video {
        position: fixed;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        z-index: -1;
        transform: translateX(-50%) translateY(-50%);
      }

    .card {
      transition: transform 0.3s, box-shadow 0.3s;
      background-color: #0b0218;
      border-color: rgb(124, 124, 124);
    }
    
    .card:hover {
      transform: scale(1.05);
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
    }

    #fondomenu {
        background-color: #0b0218; /* Azul oscuro */
        height: 80px;
        width: 100%;
        position: fixed;
        top: 0;
        z-index: 1000;
    }
  </style>
  <title>Iniciar sesión</title>
</head>
<body>

    <!--- FONDO DE NEXUS-->

    <video autoplay loop muted>
        <source src="./mp4/timelapse.mp4" type="video/mp4">
        Tu navegador no soporta el elemento de video.
      </video>

    <!--- AQUI INICIA EL NAVBAR-->

    <header class="main_menu single_page_menu" id="fondomenu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="fighter.php">Servidor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Redes Sociales</a>
                                </li>
                            </ul>
                        </div>
                        <a href="login.html" class="btn_1 d-none d-sm-block">Jugar</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    </header>

    <!--- AQUI FINALIZA EL NAVBAR-->
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6">
      <div class="card animate__animated animate__fadeInLeft">
        <img src="./img/registrarse.png" class="card-img-top" alt="Imagen de Registro">
        <div class="card-body">
          <a href="registro.php" class="btn_1 d-none d-sm-block">Registrarse</a>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="card animate__animated animate__fadeInRight">
        <img src="./img/registrarse2.png" class="card-img-top" alt="Imagen de Inicio de Sesión">
        <div class="card-body">
          <a href="#" class="btn_1 d-none d-sm-block">Iniciar Sesión</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap JS y Popper.js (necesarios para el funcionamiento de algunos componentes de Bootstrap) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</html>
